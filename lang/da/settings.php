<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Indstillinger',
    'settings_save' => 'Gem indstillinger',
    'system_version' => 'Systemversion',
    'categories' => 'Kategorier',

    // App Settings
    'app_customization' => 'Tilpasning',
    'app_features_security' => 'Funktionalitet og sikkerhed',
    'app_name' => 'Applikationsnavn',
    'app_name_desc' => 'Dette navn vises i headeren og i alle e-mails sendt fra systemet.',
    'app_name_header' => 'Vis navn i header',
    'app_public_access' => 'Offentlig adgang',
    'app_public_access_desc' => 'Aktivering af denne funktion giver besøgende, der ikke er logget ind, adgang til indhold i din BookStack-instans.',
    'app_public_access_desc_guest' => 'Adgang for ikke-registrerede besøgende kan kontrolleres via "Gæst" -brugeren.',
    'app_public_access_toggle' => 'Tillad offentlig adgang',
    'app_public_viewing' => 'Tillad offentlig visning?',
    'app_secure_images' => 'Højere sikkerhed for billeduploads',
    'app_secure_images_toggle' => 'Aktiver højere sikkerhed for billeduploads',
    'app_secure_images_desc' => 'Af performanceårsager er alle billeder offentlige. Denne funktion tilføjer en tilfældig, vanskelig at gætte streng foran billed-url\'er. Sørg for, at mappeindeksering ikke er aktiveret for at forhindre nem adgang.',
    'app_default_editor' => 'Standard Side Editor',
    'app_default_editor_desc' => 'Vælg hvilken editor der som standard skal bruges ved redigering af nye sider. Dette kan tilsidesættes på side niveau, hvor tilladelser tillader det.',
    'app_custom_html' => 'Tilpasset HTML head indhold',
    'app_custom_html_desc' => 'Alt indhold tilføjet her, vil blive indsat i bunden af <head> sektionen på alle sider. Dette er brugbart til overskrivning af styles og tilføjelse af analytics kode.',
    'app_custom_html_disabled_notice' => 'Brugerdefineret HTML head indhold er deaktiveret på denne indstillingsside for at, at ændringer kan rulles tilbage.',
    'app_logo' => 'Applikationslogo',
    'app_logo_desc' => 'This is used in the application header bar, among other areas. This image should be 86px in height. Large images will be scaled down.',
    'app_icon' => 'Application Icon',
    'app_icon_desc' => 'This icon is used for browser tabs and shortcut icons. This should be a 256px square PNG image.',
    'app_homepage' => 'Applikationsforside',
    'app_homepage_desc' => 'Vælg en visning, der skal vises på forsiden i stedet for standardvisningen. Sidetilladelser ignoreres for de valgte sider.',
    'app_homepage_select' => 'Vælg en side',
    'app_footer_links' => 'Footer links',
    'app_footer_links_desc' => 'Tilføj links til footeren. Linksene vil blive vist nederst på de fleste sider, inkluderet sider, som ikke kræver login. Brug en label med "trans::<key>" for at bruge systemdefinerede oversættelser. For eksempel: "trans::common.privacy_policy" giver den oversatte tekst "Privacy Policy" og "trans::common.terms_of_service" vil give den oversatte tekst "Terms of Service".',
    'app_footer_links_label' => 'Link label',
    'app_footer_links_url' => 'Link URL',
    'app_footer_links_add' => 'Tilføj footer link',
    'app_disable_comments' => 'Deaktiver kommentarer',
    'app_disable_comments_toggle' => 'Deaktiver kommentar',
    'app_disable_comments_desc' => 'Deaktiverer kommentarer på tværs af alle sider i applikationen. <br> Eksisterende kommentarer vises ikke.',

    // Color settings
    'color_scheme' => 'Application Color Scheme',
    'color_scheme_desc' => 'Set the colors to use in the application user interface. Colors can be configured separately for dark and light modes to best fit the theme and ensure legibility.',
    'ui_colors_desc' => 'Set the application primary color and default link color. The primary color is mainly used for the header banner, buttons and interface decorations. The default link color is used for text-based links and actions, both within written content and in the application interface.',
    'app_color' => 'Primary Color',
    'link_color' => 'Default Link Color',
    'content_colors_desc' => 'Set colors for all elements in the page organisation hierarchy. Choosing colors with a similar brightness to the default colors is recommended for readability.',
    'bookshelf_color' => 'Bogreolfarve',
    'book_color' => 'Bogfarve',
    'chapter_color' => 'Kapitelfarve',
    'page_color' => 'Sidefarve',
    'page_draft_color' => 'Sidekladdefarve',

    // Registration Settings
    'reg_settings' => 'Registrering',
    'reg_enable' => 'Aktivér tilmelding',
    'reg_enable_toggle' => 'Aktivér tilmelding',
    'reg_enable_desc' => 'Når registrering er aktiveret, vil alle kunne registrere sig som en applikationsbruger. Ved registrering får de en standardbrugerrolle.',
    'reg_default_role' => 'Standardrolle efter registrering',
    'reg_enable_external_warning' => 'Indstillingen ovenfor ignoreres, mens ekstern LDAP- eller SAML-godkendelse er aktiv. Brugerkonti for ikke-eksisterende medlemmer oprettes automatisk, hvis godkendelse mod det eksterne system, der er i brug, er vellykket.',
    'reg_email_confirmation' => 'Email bekræftelse',
    'reg_email_confirmation_toggle' => 'Kræv E-Mail bekræftelse',
    'reg_confirm_email_desc' => 'Hvis domænebegrænsning bruges, kræves e-mail-bekræftelse, og denne indstilling ignoreres.',
    'reg_confirm_restrict_domain' => 'Domæneregistrering',
    'reg_confirm_restrict_domain_desc' => 'Indtast en kommasepareret liste over e-mail-domæner, som du vil begrænse registreringen til. Brugere får en E-Mail for at bekræfte deres adresse, før de får tilladelse til at interagere med applikationen. <br> Bemærk, at brugere vil kunne ændre deres e-mail-adresser efter vellykket registrering.',
    'reg_confirm_restrict_domain_placeholder' => 'Ingen restriktion opsat',

    // Maintenance settings
    'maint' => 'Vedligeholdelse',
    'maint_image_cleanup' => 'Ryd op i billeder',
    'maint_image_cleanup_desc' => 'Scanner side & revisionsindhold for at kontrollere, hvilke billeder og tegninger, der i øjeblikket er i brug, og hvilke billeder, der er overflødige. Sørg for, at du opretter en komplet database og billedbackup, før du kører dette.',
    'maint_delete_images_only_in_revisions' => 'Slet også billeder, der kun findes i gamle siderevisioner',
    'maint_image_cleanup_run' => 'Kør Oprydning',
    'maint_image_cleanup_warning' => 'der blev fundet :count potentielt ubrugte billeder. Er du sikker på, at du vil slette disse billeder?',
    'maint_image_cleanup_success' => ':count: potentielt ubrugte billeder fundet og slettet!',
    'maint_image_cleanup_nothing_found' => 'Ingen ubrugte billeder fundet, intet slettet!',
    'maint_send_test_email' => 'Send en Testemail',
    'maint_send_test_email_desc' => 'Dette sender en testmail til din mailadresse specificeret på din profil.',
    'maint_send_test_email_run' => 'Afsend test E-Mail',
    'maint_send_test_email_success' => 'E-Mail sendt til :address',
    'maint_send_test_email_mail_subject' => 'Test E-Mail',
    'maint_send_test_email_mail_greeting' => 'E-Mail levering ser ud til at virke!',
    'maint_send_test_email_mail_text' => 'Tillykke! Da du har modtaget denne mailnotifikation, ser det ud som om, at dine mailindstillinger er opsat korrekt.',
    'maint_recycle_bin_desc' => 'Slettede hylder, bøger, kapitler og sider overføres til papirkurven, så de kan gendannes eller slettes permanent. Ældre elementer i papirkurven fjernes automatisk efter et stykke tid afhængigt af systemets konfiguration.',
    'maint_recycle_bin_open' => 'Åbn papirkurven',
    'maint_regen_references' => 'Regenerate References',
    'maint_regen_references_desc' => 'This action will rebuild the cross-item reference index within the database. This is usually handled automatically but this action can be useful to index old content or content added via unofficial methods.',
    'maint_regen_references_success' => 'Reference index has been regenerated!',
    'maint_timeout_command_note' => 'Note: This action can take time to run, which can lead to timeout issues in some web environments. As an alternative, this action be performed using a terminal command.',

    // Recycle Bin
    'recycle_bin' => 'Papirkurv',
    'recycle_bin_desc' => 'Her kan du gendanne elementer, der er blevet slettet eller vælge at permanent fjerne dem fra systemet. Denne liste er ufiltreret, i modsætning til lignende aktivitetslister i systemet, hvor tilladelsesfiltre anvendes.',
    'recycle_bin_deleted_item' => 'Slettet element',
    'recycle_bin_deleted_parent' => 'Overordnet',
    'recycle_bin_deleted_by' => 'Slettet af',
    'recycle_bin_deleted_at' => 'Sletningstidspunkt',
    'recycle_bin_permanently_delete' => 'Slet permanent',
    'recycle_bin_restore' => 'Gendan',
    'recycle_bin_contents_empty' => 'Papirkurven er tom',
    'recycle_bin_empty' => 'Tøm papirkurv',
    'recycle_bin_empty_confirm' => 'Dette vil permanent slette alle elementer i papirkurven, inkluderet hvert elements indhold. Er du sikker på, at du vil tømme papirkurven?',
    'recycle_bin_destroy_confirm' => 'Denne handling sletter dette element permanent, sammen med elementerne anført nedenfor, fra systemet. Du vil ikke være i stand til at gendanne dette indhold. Er du sikker på, at du vil slette dette element permanent?',
    'recycle_bin_destroy_list' => 'Elementer der skal slettes',
    'recycle_bin_restore_list' => 'Elementer der skal gendannes',
    'recycle_bin_restore_confirm' => 'Denne handling vil gendanne det slettede element, herunder alle underelementer, til deres oprindelige placering. Hvis den oprindelige placering siden er blevet slettet, og nu er i papirkurven, vil det overordnede element også skulle gendannes.',
    'recycle_bin_restore_deleted_parent' => 'Det overordnede element til dette element er også blevet slettet. Disse vil forblive slettet indtil det overordnede også er gendannet.',
    'recycle_bin_restore_parent' => 'Gendan Overordnet',
    'recycle_bin_destroy_notification' => 'Slettede :count elementer fra papirkurven.',
    'recycle_bin_restore_notification' => 'Gendannede :count elementer fra papirkurven.',

    // Audit Log
    'audit' => 'Revisionslog',
    'audit_desc' => 'Denne revisionslog viser en liste over aktiviteter sporet i systemet. Denne liste er ufiltreret i modsætning til lignende aktivitetslister i systemet, hvor tilladelsesfiltre anvendes.',
    'audit_event_filter' => 'Event filter',
    'audit_event_filter_no_filter' => 'Intet filter',
    'audit_deleted_item' => 'Element slettet',
    'audit_deleted_item_name' => 'Navn: :name',
    'audit_table_user' => 'Bruger',
    'audit_table_event' => 'Hændelse',
    'audit_table_related' => 'Relateret element eller detalje',
    'audit_table_ip' => 'IP-adresse',
    'audit_table_date' => 'Aktivitetsdato',
    'audit_date_from' => 'Datointerval fra',
    'audit_date_to' => 'Datointerval til',

    // Role Settings
    'roles' => 'Roller',
    'role_user_roles' => 'Brugerroller',
    'roles_index_desc' => 'Roles are used to group users & provide system permission to their members. When a user is a member of multiple roles the privileges granted will stack and the user will inherit all abilities.',
    'roles_x_users_assigned' => ':count user assigned|:count users assigned',
    'roles_x_permissions_provided' => ':count permission|:count permissions',
    'roles_assigned_users' => 'Assigned Users',
    'roles_permissions_provided' => 'Provided Permissions',
    'role_create' => 'Opret en ny rolle',
    'role_delete' => 'Slet rolle',
    'role_delete_confirm' => 'Dette vil slette rollen med navnet \':roleName\'.',
    'role_delete_users_assigned' => 'Denne rolle er tildelt :userCount brugere. Hvis du vil rykke disse brugere fra denne rolle, kan du vælge en ny nedenunder.',
    'role_delete_no_migration' => "Ryk ikke brugere",
    'role_delete_sure' => 'Er du sikker på, at du vil slette denne rolle?',
    'role_edit' => 'Rediger rolle',
    'role_details' => 'Rolledetaljer',
    'role_name' => 'Rollenavn',
    'role_desc' => 'Kort beskrivelse af rolle',
    'role_mfa_enforced' => 'Kræver multifaktor godkendelse',
    'role_external_auth_id' => 'Eksterne godkendelses-IDer',
    'role_system' => 'Systemtilladelser',
    'role_manage_users' => 'Administrere brugere',
    'role_manage_roles' => 'Administrer roller & rollerettigheder',
    'role_manage_entity_permissions' => 'Administrer alle bog-, kapitel- & side-rettigheder',
    'role_manage_own_entity_permissions' => 'Administrer tilladelser på egne bøger, kapitler og sider',
    'role_manage_page_templates' => 'Administrer side-skabeloner',
    'role_access_api' => 'Tilgå system-API',
    'role_manage_settings' => 'Administrer app-indstillinger',
    'role_export_content' => 'Eksporter indhold',
    'role_editor_change' => 'Skift side editor',
    'role_asset' => 'Tilladelser for medier og "assets"',
    'roles_system_warning' => 'Vær opmærksom på, at adgang til alle af de ovennævnte tre tilladelser, kan give en bruger mulighed for at ændre deres egne brugerrettigheder eller brugerrettigheder for andre i systemet. Tildel kun roller med disse tilladelser til betroede brugere.',
    'role_asset_desc' => 'Disse tilladelser kontrollerer standardadgang til medier og "assets" i systemet. Tilladelser til bøger, kapitler og sider tilsidesætter disse tilladelser.',
    'role_asset_admins' => 'Administratorer får automatisk adgang til alt indhold, men disse indstillinger kan vise eller skjule UI-indstillinger.',
    'role_asset_image_view_note' => 'This relates to visibility within the image manager. Actual access of uploaded image files will be dependant upon system image storage option.',
    'role_all' => 'Alle',
    'role_own' => 'Eget',
    'role_controlled_by_asset' => 'Styres af det medie/"asset", de uploades til',
    'role_save' => 'Gem rolle',
    'role_users' => 'Brugere med denne rolle',
    'role_users_none' => 'Ingen brugere er i øjeblikket tildelt denne rolle',

    // Users
    'users' => 'Brugere',
    'users_index_desc' => 'Create & manage individual user accounts within the system. User accounts are used for login and attribution of content & activity. Access permissions are primarily role-based but user content ownership, among other factors, may also affect permissions & access.',
    'user_profile' => 'Brugerprofil',
    'users_add_new' => 'Tilføj ny bruger',
    'users_search' => 'Søg efter brugere',
    'users_latest_activity' => 'Seneste aktivitet',
    'users_details' => 'Brugeroplysninger',
    'users_details_desc' => 'Angiv et visningsnavn og en E-Mail-adresse for denne bruger. E-Mail-adressen bruges til at logge ind på applikationen.',
    'users_details_desc_no_email' => 'Sætter et visningsnavn for denne bruger, så andre kan genkende dem.',
    'users_role' => 'Brugerroller',
    'users_role_desc' => 'Vælg hvilke roller denne bruger skal tildeles. Hvis en bruger er tildelt flere roller, sammenføres tilladelserne fra disse roller, og de får alle evnerne fra de tildelte roller.',
    'users_password' => 'Brugeradgangskode',
    'users_password_desc' => 'Sæt et kodeord, der bruges til at logge på applikationen. Dette skal være mindst 8 tegn langt.',
    'users_send_invite_text' => 'Du kan vælge at sende denne bruger en invitation på E-Mail, som giver dem mulighed for at indstille deres egen adgangskode, ellers kan du indstille deres adgangskode selv.',
    'users_send_invite_option' => 'Send bruger en invitationsmail',
    'users_external_auth_id' => 'Ekstern godkendelses ID',
    'users_external_auth_id_desc' => 'Dette er det ID, der bruges til at matche denne bruger ved kommunikation med dit eksterne godkendelsessystem.',
    'users_password_warning' => 'Udfyld kun nedenstående, hvis du vil ændre din adgangskode.',
    'users_system_public' => 'Denne bruger repræsenterer alle gæstebrugere, der besøger din instans. Den kan ikke bruges til at logge på, men tildeles automatisk.',
    'users_delete' => 'Slet bruger',
    'users_delete_named' => 'Slet bruger :userName',
    'users_delete_warning' => 'Dette vil helt slette denne bruger med navnet \':userName\' fra systemet.',
    'users_delete_confirm' => 'Er du sikker på, at du vil slette denne bruger?',
    'users_migrate_ownership' => 'Overfør ejerskab',
    'users_migrate_ownership_desc' => 'Vælg en bruger her, hvis du vil have en anden bruger til at blive ejer af alle elementer, der i øjeblikket ejes af denne bruger.',
    'users_none_selected' => 'Ingen bruger valgt',
    'users_edit' => 'Rediger bruger',
    'users_edit_profile' => 'Rediger profil',
    'users_avatar' => 'Brugeravatar',
    'users_avatar_desc' => 'Vælg et billede for at repræsentere denne bruger. Dette skal være ca. 256px kvadratisk.',
    'users_preferred_language' => 'Foretrukket sprog',
    'users_preferred_language_desc' => 'Denne indstilling ændrer det sprog, der bruges til applikationens brugergrænseflade. Dette påvirker ikke noget brugeroprettet indhold.',
    'users_social_accounts' => 'Sociale konti',
    'users_social_accounts_info' => 'Her kan du forbinde dine andre konti for hurtigere og lettere login. Afbrydelse af en konto her tilbagekalder ikke tidligere autoriseret adgang. Tilbagekald adgang fra dine profilindstillinger på den tilsluttede sociale konto.',
    'users_social_connect' => 'Forbind konto',
    'users_social_disconnect' => 'Frakobl konto',
    'users_social_connected' => ':socialAccount kontoen blev knyttet til din profil.',
    'users_social_disconnected' => ':socialAccount kontoen blev afbrudt fra din profil.',
    'users_api_tokens' => 'API Tokens',
    'users_api_tokens_none' => 'Ingen API tokens er blevet oprettet for denne bruger',
    'users_api_tokens_create' => 'Opret Token',
    'users_api_tokens_expires' => 'Udløber',
    'users_api_tokens_docs' => 'API-dokumentation',
    'users_mfa' => 'Multi-faktor godkendelse',
    'users_mfa_desc' => 'Opsæt multi-faktor godkendelse som et ekstra lag af sikkerhed for din brugerkonto.',
    'users_mfa_x_methods' => ':count metode konfigureret|:count metoder konfigureret',
    'users_mfa_configure' => 'Konfigurer metoder',

    // API Tokens
    'user_api_token_create' => 'Opret API-token',
    'user_api_token_name' => 'Navn',
    'user_api_token_name_desc' => 'Giv din token et læsbart navn som en fremtidig påmindelse om dets tilsigtede formål.',
    'user_api_token_expiry' => 'Udløbsdato',
    'user_api_token_expiry_desc' => 'Indstil en dato, hvorpå denne token udløber. Efter denne dato fungerer anmodninger, der er lavet med denne token, ikke længere. Hvis du lader dette felt være tomt, udløber den 100 år ud i fremtiden.',
    'user_api_token_create_secret_message' => 'Umiddelbart efter oprettelse af denne token genereres og vises et "Token-ID" og Token hemmelighed". Hemmeligheden vises kun en gang, så husk at kopiere værdien til et sikkert sted inden du fortsætter.',
    'user_api_token' => 'API Token',
    'user_api_token_id' => 'Token-ID',
    'user_api_token_id_desc' => 'Dette er en ikke-redigerbar systemgenereret identifikator for denne token, som skal sendes i API-anmodninger.',
    'user_api_token_secret' => 'Token hemmelighed',
    'user_api_token_secret_desc' => 'Dette er et system genereret hemmelighed for denne token, som skal sendes i API-anmodninger. Dette vises kun denne ene gang, så kopier denne værdi til et sikkert sted.',
    'user_api_token_created' => 'Token oprettet :timeAgo',
    'user_api_token_updated' => 'Token opdateret :timeAgo',
    'user_api_token_delete' => 'Slet Token',
    'user_api_token_delete_warning' => 'Dette vil helt slette API-token\'en med navnet \':tokenName\' fra systemet.',
    'user_api_token_delete_confirm' => 'Er du sikker på, at du vil slette denne API-token?',

    // Webhooks
    'webhooks' => 'Webhooks',
    'webhooks_index_desc' => 'Webhooks are a way to send data to external URLs when certain actions and events occur within the system which allows event-based integration with external platforms such as messaging or notification systems.',
    'webhooks_x_trigger_events' => ':count trigger event|:count trigger events',
    'webhooks_create' => 'Opret ny Webhook',
    'webhooks_none_created' => 'Ingen webhooks er blevet oprettet endnu.',
    'webhooks_edit' => 'Rediger Webhook',
    'webhooks_save' => 'Gem Webhook',
    'webhooks_details' => 'Webhook detaljer',
    'webhooks_details_desc' => 'Angiv et brugervenligt navn og et POST endpoint som en lokation for webhook data at blive sendt til.',
    'webhooks_events' => 'Webhook Begivenheder',
    'webhooks_events_desc' => 'Vælg alle begivenhederd er skal udløse denne webhook til at blive kaldt.',
    'webhooks_events_warning' => 'Husk, at disse begivenheder vil blive udløst for alle valgte begivenheder, selv om brugerdefinerede tilladelser bliver anvendt. Sørg for, at brugen af denne webhook ikke vil afsløre fortroligt indhold.',
    'webhooks_events_all' => 'Alle systemhændelser',
    'webhooks_name' => 'Webhook Navn',
    'webhooks_timeout' => 'Webhook forespørgsel timeout (Sekunder)',
    'webhooks_endpoint' => 'Webhook Endpoint',
    'webhooks_active' => 'Webhook Aktiv',
    'webhook_events_table_header' => 'Begivenheder',
    'webhooks_delete' => 'Slet Webhook',
    'webhooks_delete_warning' => 'Dette vil helt slette denne webhook med navnet \':webhookName\' fra systemet.',
    'webhooks_delete_confirm' => 'Er du sikker på at du vil slette denne webhook?',
    'webhooks_format_example' => 'Webhook format eksempel',
    'webhooks_format_example_desc' => 'Webhook data bliver sendt som en POST anmodning til det konfigurerede endpoint som JSON efter formatet nedenfor. Egenskaberne "related_item" og "url" er valgri og vil afhænge af den type begivenhed udløst.',
    'webhooks_status' => 'Webhook Status',
    'webhooks_last_called' => 'Sidst Kaldt:',
    'webhooks_last_errored' => 'Sidst Fejlet:',
    'webhooks_last_error_message' => 'Sidste fejlmeddelelse:',


    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'bs' => 'Bosanski',
        'ca' => 'Catalansk',
        'cs' => 'Česky',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'el' => 'ελληνικά',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'et' => 'Eesti keel',
        'eu' => 'Euskara',
        'fa' => 'فارسی',
        'fr' => 'Français',
        'he' => 'Hebraisk',
        'hr' => 'Hrvatski',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'lt' => 'Lietuvių Kalba',
        'lv' => 'Latviešu Valoda',
        'nl' => 'Nederlands',
        'nb' => 'Norsk (Bokmål)',
        'pl' => 'Polski',
        'pt' => 'Português',
        'pt_BR' => 'Português do Brasil',
        'ro' => 'Română',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ],
    //!////////////////////////////////
];
