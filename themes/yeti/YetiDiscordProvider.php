<?php

namespace Yeti;

use BookStack\Exceptions\SocialSignInException;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use SocialiteProviders\Manager\OAuth2\AbstractProvider;
use SocialiteProviders\Manager\OAuth2\User;
use Illuminate\Support\Facades\Log;

class YetiDiscordProvider extends AbstractProvider
{
    public const IDENTIFIER = 'YETI_DISCORD';

    /**
     * {@inheritdoc}
     */
    protected $scopes = [
        'identify',
	'email',
	'guilds.members.read'
    ];

    /**
     * {@inheritdoc}
     */
    protected $consent = false;

    /**
     * {@inheritdoc}
     */
    protected $scopeSeparator = ' ';

    /**
     * {@inheritdoc}
     */
    protected function getAuthUrl($state)
    {
        return $this->buildAuthUrlFromBase(
            'https://discord.com/api/oauth2/authorize',
            $state
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function getCodeFields($state = null)
    {
        $fields = parent::getCodeFields($state);

        if (!$this->consent) {
            $fields['prompt'] = 'none';
        }

        return $fields;
    }

    /**
     * Prompt for consent each time or not.
     *
     * @return $this
     */
    public function withConsent()
    {
        $this->consent = true;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    protected function getTokenUrl()
    {
        return 'https://discord.com/api/oauth2/token';
    }


    /**
     * {@inheritdoc}
     */
    protected function getUserByToken($token)
    {
        $response = $this->getHttpClient()->get(
                'https://discord.com/api/users/@me',
                [
                    RequestOptions::HEADERS => [
                        'Authorization' => 'Bearer '.$token,
                    ],
                ]
        );

        try {
            $yeti_response = $this->getHttpClient()->get(
                'https://discord.com/api/users/@me/guilds/408711970305474560/member',
                [
                    RequestOptions::HEADERS => [
                        'Authorization' => 'Bearer ' . $token,
                    ]
                ]
            );
        } catch (ClientException $e) {
           $revoke = $this->getHttpClient()->post(
               'https://discord.com/api/oauth2/token/revoke',
               [
                   'headers' => [
                       'Content-Type' => 'application/x-www-form-urlencoded'
                   ],
                   'form_params' => [
                       'client_id' => env('YETI_DISCORD_APP_ID'),
                       'client_secret' => env('YETI_DISCORD_APP_SECRET'),
                       'token' => $token
                   ]
               ]
           );
            throw new SocialSignInException("You must be a member of the Yeti Discord to sign in!!!", '/login');
        }
        $user = json_decode((string) $response->getBody(), true);
        $yeti_user = json_decode((string) $yeti_response->getBody(), true);
        $user['nickname'] = $yeti_user['nick'];

        return $user;
    }

    /**
     * @param array $user
     *
     * @return string|null
     *
     * @see https://discord.com/developers/docs/reference#image-formatting-cdn-endpoints
     */
    protected function formatAvatar(array $user)
    {
        if (empty($user['avatar'])) {
            return null;
        }

        $isGif = preg_match('/a_.+/m', $user['avatar']) === 1;
        $extension = $this->getConfig('allow_gif_avatars', true) && $isGif ? 'gif' :
            $this->getConfig('avatar_default_extension', 'jpg');

        return sprintf('https://cdn.discordapp.com/avatars/%s/%s.%s', $user['id'], $user['avatar'], $extension);
    }


    /**
     * {@inheritdoc}
     */
    protected function mapUserToObject(array $user)
    {
        return (new User())->setRaw($user)->map([
            'id'       => $user['id'],
            'nickname' => $user['nickname'],
            'name'     => $user['nickname'],
            'email'    => $user['email'] ?? null,
            'avatar'   => $this->formatAvatar($user),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    protected function getTokenFields($code)
    {
        return array_merge(parent::getTokenFields($code), [
            'grant_type' => 'authorization_code',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public static function additionalConfigKeys()
    {
        return ['allow_gif_avatars', 'avatar_default_extension'];
    }
}
