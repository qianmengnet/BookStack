<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Ustawienia',
    'settings_save' => 'Zapisz ustawienia',
    'settings_save_success' => 'Ustawienia zapisane',

    // App Settings
    'app_customization' => 'Customization',
    'app_features_security' => 'Features & Security',
    'app_name' => 'Nazwa aplikacji',
    'app_name_desc' => 'Ta nazwa jest wyświetlana w nagłówku i e-mailach.',
    'app_name_header' => 'Pokazać nazwę aplikacji w nagłówku?',
    'app_public_access' => 'Public Access',
    'app_public_access_desc' => 'Enabling this option will allow visitors, that are not logged-in, to access content in your BookStack instance.',
    'app_public_access_desc_guest' => 'Access for public visitors can be controlled through the "Guest" user.',
    'app_public_access_toggle' => 'Allow public access',
    'app_public_viewing' => 'Zezwolić na publiczne przeglądanie?',
    'app_secure_images' => 'Włączyć przesyłanie obrazów o wyższym poziomie bezpieczeństwa?',
    'app_secure_images_toggle' => 'Enable higher security image uploads',
    'app_secure_images_desc' => 'Ze względów wydajnościowych wszystkie obrazki są publiczne. Ta opcja dodaje dodatkowy, trudny do odgadnięcia losowy ciąg na początku nazwy obrazka. Upewnij się że indeksowanie katalogów jest zablokowane, aby uniemożliwić łatwy dostęp do obrazków.',
    'app_editor' => 'Edytor strony',
    'app_editor_desc' => 'Wybierz edytor używany przez użytkowników do edycji zawartości.',
    'app_custom_html' => 'Własna zawartość w tagu <head>',
    'app_custom_html_desc' => 'Zawartość dodana tutaj zostanie dołączona na dole sekcji <head> każdej strony. Przydatne przy nadpisywaniu styli lub dodawaniu analityki.',
    'app_custom_html_disabled_notice' => 'Custom HTML head content is disabled on this settings page to ensure any breaking changes can be reverted.',
    'app_logo' => 'Logo aplikacji',
    'app_logo_desc' => 'Ten obrazek powinien mieć nie więcej niż 43px wysokosci. <br>Większe obrazki zostaną zmniejszone.',
    'app_primary_color' => 'Podstawowy kolor aplikacji',
    'app_primary_color_desc' => 'To powinna być wartość HEX. <br>Zostaw to pole puste, by powrócić do podstawowego koloru.',
    'app_homepage' => 'Strona główna',
    'app_homepage_desc' => 'Wybierz widok, który będzie wyświetlany na stronie głównej zamiast w widoku domyślnego. Uprawnienia dostępowe są ignorowane dla wybranych stron.',
    'app_homepage_select' => 'Wybierz stronę',
    'app_disable_comments' => 'Wyłącz komentarze',
    'app_disable_comments_toggle' => 'Disable comments',
    'app_disable_comments_desc' => 'Wyłącz komentarze na wszystkich stronach w aplikacji. Istniejące komentarze nie będą pokazywane.',

    // Registration Settings
    'reg_settings' => 'Ustawienia rejestracji',
    'reg_enable' => 'Enable Registration',
    'reg_enable_toggle' => 'Enable registration',
    'reg_enable_desc' => 'When registration is enabled user will be able to sign themselves up as an application user. Upon registration they are given a single, default user role.',
    'reg_default_role' => 'Domyślna rola użytkownika po rejestracji',
    'reg_email_confirmation' => 'Email Confirmation',
    'reg_email_confirmation_toggle' => 'Require email confirmation',
    'reg_confirm_email_desc' => 'Jeśli restrykcje domenowe zostały ustawione, potwierdzenie adresu stanie się konieczne, a poniższa wartośc zostanie zignorowana.',
    'reg_confirm_restrict_domain' => 'Restrykcje domenowe dot. adresu e-mail',
    'reg_confirm_restrict_domain_desc' => 'Wprowadź listę domen adresów e-mail, rozdzieloną przecinkami, którym chciałbyś zezwolić na rejestrację. Wymusi to konieczność potwierdzenia adresu e-mail przez użytkownika przed uzyskaniem dostępu do aplikacji. <br> Pamiętaj, że użytkownicy będą mogli zmienić adres e-mail po rejestracji.',
    'reg_confirm_restrict_domain_placeholder' => 'Brak restrykcji',

    // Maintenance settings
    'maint' => 'Konserwacja',
    'maint_image_cleanup' => 'Czyszczenie obrazków',
    'maint_image_cleanup_desc' => "Skanuje zawartość strony i poprzednie wersje, aby sprawdzić, które obrazy i rysunki są aktualnie używane, a które obrazy są zbędne. Przed uruchomieniem tej opcji należy utworzyć pełną kopię zapasową bazy danych i obrazków.",
    'maint_image_cleanup_ignore_revisions' => 'Ignoruje obrazki w poprzednich wersjach',
    'maint_image_cleanup_run' => 'Uruchom czyszczenie',
    'maint_image_cleanup_warning' => 'Znaleziono :count potencjalnie niepotrzebnych obrazków. Czy na pewno chcesz je usunąć?',
    'maint_image_cleanup_success' => ':count potencjalnie nieużywane obrazki zostały znalezione i usunięte!',
    'maint_image_cleanup_nothing_found' => 'Nie znaleziono żadnych nieużywanych obrazków. Nic nie zostało usunięte!',

    // Role Settings
    'roles' => 'Role',
    'role_user_roles' => 'Role użytkowników',
    'role_create' => 'Utwórz nową rolę',
    'role_create_success' => 'Rola utworzona pomyślnie',
    'role_delete' => 'Usuń rolę',
    'role_delete_confirm' => 'To spowoduje usunięcie roli \':roleName\'.',
    'role_delete_users_assigned' => 'Tę rolę ma przypisanych :userCount użytkowników. Jeśli chcesz zmigrować użytkowników z tej roli, wybierz nową poniżej.',
    'role_delete_no_migration' => "Nie migruj użytkowników",
    'role_delete_sure' => 'Czy na pewno chcesz usunąć tę rolę?',
    'role_delete_success' => 'Rola usunięta pomyślnie',
    'role_edit' => 'Edytuj rolę',
    'role_details' => 'Szczegóły roli',
    'role_name' => 'Nazwa roli',
    'role_desc' => 'Krótki opis roli',
    'role_external_auth_id' => 'Zewnętrzne identyfikatory uwierzytelniania',
    'role_system' => 'Uprawnienia systemowe',
    'role_manage_users' => 'Zarządzanie użytkownikami',
    'role_manage_roles' => 'Zarządzanie rolami i uprawnieniami ról',
    'role_manage_entity_permissions' => 'Zarządzanie uprawnieniami podręczników, rozdziałów i stron',
    'role_manage_own_entity_permissions' => 'Zarządzanie uprawnieniami własnych podręczników, rozdziałów i stron',
    'role_manage_page_templates' => 'Manage page templates',
    'role_manage_settings' => 'Zarządzanie ustawieniami aplikacji',
    'role_asset' => 'Zarządzanie zasobami',
    'role_asset_desc' => 'Te ustawienia kontrolują zarządzanie zasobami systemu. Uprawnienia podręczników, rozdziałów i stron nadpisują te ustawienia.',
    'role_asset_admins' => 'Administratorzy mają automatycznie dostęp do wszystkich treści, ale te opcję mogą być pokazywać lub ukrywać opcje interfejsu użytkownika.',
    'role_all' => 'Wszyscy',
    'role_own' => 'Własne',
    'role_controlled_by_asset' => 'Kontrolowane przez zasób, do którego zostały udostępnione',
    'role_save' => 'Zapisz rolę',
    'role_update_success' => 'Rola zapisana pomyślnie',
    'role_users' => 'Użytkownicy w tej roli',
    'role_users_none' => 'Brak użytkowników zapisanych do tej roli',

    // Users
    'users' => 'Użytkownicy',
    'user_profile' => 'Profil użytkownika',
    'users_add_new' => 'Dodaj użytkownika',
    'users_search' => 'Wyszukaj użytkownika',
    'users_details' => 'User Details',
    'users_details_desc' => 'Set a display name and an email address for this user. The email address will be used for logging into the application.',
    'users_details_desc_no_email' => 'Set a display name for this user so others can recognise them.',
    'users_role' => 'Role użytkownika',
    'users_role_desc' => 'Select which roles this user will be assigned to. If a user is assigned to multiple roles the permissions from those roles will stack and they will receive all abilities of the assigned roles.',
    'users_password' => 'User Password',
    'users_password_desc' => 'Set a password used to log-in to the application. This must be at least 6 characters long.',
    'users_send_invite_text' => 'You can choose to send this user an invitation email which allows them to set their own password otherwise you can set their password yourself.',
    'users_send_invite_option' => 'Send user invite email',
    'users_external_auth_id' => 'Zewnętrzne identyfikatory autentykacji',
    'users_external_auth_id_desc' => 'This is the ID used to match this user when communicating with your LDAP system.',
    'users_password_warning' => 'Wypełnij poniżej tylko jeśli chcesz zmienić swoje hasło:',
    'users_system_public' => 'Ten użytkownik reprezentuje każdego gościa odwiedzającego tę aplikację. Nie można się na niego zalogować, lecz jest przyznawany automatycznie.',
    'users_delete' => 'Usuń użytkownika',
    'users_delete_named' => 'Usuń :userName',
    'users_delete_warning' => 'To usunie użytkownika \':userName\' z systemu.',
    'users_delete_confirm' => 'Czy na pewno chcesz usunąć tego użytkownika?',
    'users_delete_success' => 'Użytkownik usunięty pomyślnie',
    'users_edit' => 'Edytuj użytkownika',
    'users_edit_profile' => 'Edytuj profil',
    'users_edit_success' => 'Użytkownik zaktualizowany pomyśłnie',
    'users_avatar' => 'Avatar użytkownika',
    'users_avatar_desc' => 'Ten obrazek powinien posiadać wymiary 256x256px.',
    'users_preferred_language' => 'Preferowany język',
    'users_preferred_language_desc' => 'This option will change the language used for the user-interface of the application. This will not affect any user-created content.',
    'users_social_accounts' => 'Konta społecznościowe',
    'users_social_accounts_info' => 'Tutaj możesz połączyć kilka kont społecznościowych w celu łatwiejszego i szybszego logowania. Odłączenie konta tutaj nie autoryzowało dostępu. Odwołaj dostęp z ustawień profilu na podłączonym koncie społecznościowym.',
    'users_social_connect' => 'Podłącz konto',
    'users_social_disconnect' => 'Odłącz konto',
    'users_social_connected' => ':socialAccount zostało dodane do Twojego profilu.',
    'users_social_disconnected' => ':socialAccount zostało odłączone od Twojego profilu.',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'fr' => 'Français',
        'nl' => 'Nederlands',
        'pt_BR' => 'Português do Brasil',
        'sk' => 'Slovensky',
        'cs' => 'Česky',
        'sv' => 'Svenska',
        'ko' => '한국어',
        'ja' => '日本語',
        'pl' => 'Polski',
        'it' => 'Italian',
        'ru' => 'Русский',
        'uk' => 'Українська',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
        'hu' => 'Magyar',
        'tr' => 'Türkçe',
    ]
    //!////////////////////////////////
];
