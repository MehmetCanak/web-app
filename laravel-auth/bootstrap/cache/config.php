<?php return array (
  'app' => 
  array (
    'name' => 'Laravel',
    'env' => 'local',
    'debug' => true,
    'url' => 'http://localhost',
    'asset_url' => NULL,
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => 'base64:nR94s/0t9hrQahakDeq32EcftKk9sHX36rz3t2nSefw=',
    'cipher' => 'AES-256-CBC',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'App\\Providers\\MacroServiceProvider',
      23 => 'App\\Providers\\ComposerServiceProvider',
      24 => 'App\\Providers\\AppServiceProvider',
      25 => 'App\\Providers\\AuthServiceProvider',
      26 => 'App\\Providers\\EventServiceProvider',
      27 => 'App\\Providers\\RouteServiceProvider',
      28 => 'SocialiteProviders\\Manager\\ServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Form' => 'Collective\\Html\\FormFacade',
      'HTML' => 'Collective\\Html\\HtmlFacade',
      'Socialite' => 'Laravel\\Socialite\\Facades\\Socialite',
      'Input' => 'Illuminate\\Support\\Facades\\Input',
      'Gravatar' => 'Creativeorange\\Gravatar\\Facades\\Gravatar',
      'Image' => 'Intervention\\Image\\Facades\\Image',
      'Uuid' => 'jeremykenedy\\Uuid\\Uuid',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'token',
        'provider' => 'users',
      ),
      'user' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'administrator' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
      ),
    ),
    'password_timeout' => 10800,
  ),
  'broadcasting' => 
  array (
    'default' => 'pusher',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
        array (
          'cluster' => '',
          'encrypted' => true,
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
        'serialize' => false,
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => '/home/user/Documents/web-app/laravel-auth/storage/framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
    ),
    'prefix' => 'laravel',
  ),
  'cors' => 
  array (
    'paths' => 
    array (
      0 => 'api/*',
    ),
    'allowed_methods' => 
    array (
      0 => '*',
    ),
    'allowed_origins' => 
    array (
      0 => '*',
    ),
    'allowed_origins_patterns' => 
    array (
    ),
    'allowed_headers' => 
    array (
      0 => '*',
    ),
    'exposed_headers' => 
    array (
    ),
    'max_age' => 0,
    'supports_credentials' => false,
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => 'laravelAuth',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'laravelAuth',
        'username' => 'root',
        'password' => '123456Aa.',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'laravelAuth',
        'username' => 'root',
        'password' => '123456Aa.',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'laravelAuth',
        'username' => 'root',
        'password' => '123456Aa.',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'phpredis',
      'options' => 
      array (
        'cluster' => 'redis',
        'prefix' => 'laravel_database_',
      ),
      'default' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '0',
      ),
      'cache' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '1',
      ),
    ),
  ),
  'debugbar' => 
  array (
    'enabled' => NULL,
    'except' => 
    array (
      0 => 'telescope*',
      1 => 'horizon*',
    ),
    'storage' => 
    array (
      'enabled' => true,
      'driver' => 'file',
      'path' => '/home/user/Documents/web-app/laravel-auth/storage/debugbar',
      'connection' => NULL,
      'provider' => '',
      'hostname' => '127.0.0.1',
      'port' => 2304,
    ),
    'include_vendors' => true,
    'capture_ajax' => true,
    'add_ajax_timing' => false,
    'error_handler' => false,
    'clockwork' => false,
    'collectors' => 
    array (
      'phpinfo' => true,
      'messages' => true,
      'time' => true,
      'memory' => true,
      'exceptions' => true,
      'log' => true,
      'db' => true,
      'views' => true,
      'route' => true,
      'auth' => false,
      'gate' => true,
      'session' => true,
      'symfony_request' => true,
      'mail' => true,
      'laravel' => false,
      'events' => false,
      'default_request' => false,
      'logs' => false,
      'files' => false,
      'config' => false,
      'cache' => false,
      'models' => true,
      'livewire' => true,
    ),
    'options' => 
    array (
      'auth' => 
      array (
        'show_name' => true,
      ),
      'db' => 
      array (
        'with_params' => true,
        'backtrace' => true,
        'backtrace_exclude_paths' => 
        array (
        ),
        'timeline' => false,
        'duration_background' => true,
        'explain' => 
        array (
          'enabled' => false,
          'types' => 
          array (
            0 => 'SELECT',
          ),
        ),
        'hints' => false,
        'show_copy' => false,
      ),
      'mail' => 
      array (
        'full_log' => false,
      ),
      'views' => 
      array (
        'timeline' => false,
        'data' => false,
      ),
      'route' => 
      array (
        'label' => true,
      ),
      'logs' => 
      array (
        'file' => NULL,
      ),
      'cache' => 
      array (
        'values' => true,
      ),
    ),
    'inject' => true,
    'route_prefix' => '_debugbar',
    'route_domain' => NULL,
    'theme' => 'auto',
    'debug_backtrace_limit' => 50,
    'enabled_environment' => 'local',
  ),
  'exceptions' => 
  array (
    'emailExceptionEnabled' => false,
    'emailExceptionEnabledDefault' => true,
    'emailExceptionFrom' => NULL,
    'emailExceptionFromDefault' => 'email@email.com',
    'emailExceptionsTo' => 'email1@gmail.com, email2@gmail.com',
    'emailExceptionsToDefault' => 'email@email.com',
    'emailExceptionCCto' => '',
    'emailExceptionCCtoDefault' => 
    array (
    ),
    'emailExceptionBCCto' => '',
    'emailExceptionBCCtoDefault' => 
    array (
    ),
    'emailExceptionSubject' => '',
    'emailExceptionSubjectDefault' => 'Error on local',
    'emailExceptionView' => 'emails.exception',
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => '/home/user/Documents/web-app/laravel-auth/storage/app',
      ),
      'ftp' => 
      array (
        'driver' => 'ftp',
        'host' => 'ftp.example.com',
        'username' => 'your-username',
        'password' => 'your-password',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => '/home/user/Documents/web-app/laravel-auth/storage/app/public',
        'url' => 'http://localhost/storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'bucket' => '',
        'endpoint' => NULL,
      ),
    ),
    'links' => 
    array (
      '/home/user/Documents/web-app/laravel-auth/public/storage' => '/home/user/Documents/web-app/laravel-auth/storage/app/public',
    ),
  ),
  'gravatar' => 
  array (
    'default' => 
    array (
      'size' => '80',
      'fallback' => 'http://c1940652.r52.cf0.rackcdn.com/51ce28d0fb4f442061000000/Screen-Shot-2013-06-28-at-5.22.23-PM.png',
      'secure' => false,
      'maximumRating' => 'g',
      'forceDefault' => false,
      'forceExtension' => 'jpg',
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 1024,
      'threads' => 2,
      'time' => 2,
    ),
  ),
  'laravel2step' => 
  array (
    'laravel2stepEnabled' => false,
    'laravel2stepDatabaseConnection' => 'mysql',
    'laravel2stepDatabaseTable' => 'laravel2step',
    'defaultUserModel' => 'App\\User',
    'verificationEmailFrom' => '',
    'verificationEmailFromName' => 'Laravel 2 Step Verification',
    'laravel2stepExceededCount' => '3',
    'laravel2stepExceededCountdownMinutes' => '1440',
    'laravel2stepVerifiedLifetimeMinutes' => '360',
    'laravel2stepTimeResetBufferSeconds' => '300',
    'laravel2stepAppCssEnabled' => false,
    'laravel2stepAppCss' => 'css/app.css',
    'laravel2stepBootstrapCssCdnEnbled' => true,
    'laravel2stepBootstrapCssCdn' => 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
    'laravel2stepCssFile' => 'css/laravel2step/app.css',
  ),
  'laravelPhpInfo' => 
  array (
    'laravelPhpInfoBladeExtended' => 'layouts.app',
    'authEnabled' => true,
    'rolesEnabled' => true,
    'rolesMiddlware' => 
    array (
      0 => 'activated',
      1 => 'role:admin',
      2 => 'activity',
      3 => 'twostep',
    ),
    'bootstapVersion' => '4',
    'bootstrapCardClasses' => '',
    'usePHPinfoCSS' => true,
  ),
  'laravelblocker' => 
  array (
    'laravelBlockerEnabled' => true,
    'blockerDatabaseConnection' => 'mysql',
    'blockerDatabaseTable' => 'laravel_blocker',
    'blockerTypeDatabaseTable' => 'laravel_blocker_types',
    'seedDefaultBlockedTypes' => true,
    'seedDefaultBlockedItems' => true,
    'seedPublishedBlockedTypes' => true,
    'seedPublishedBlockedItems' => true,
    'useSeededBlockedTypes' => true,
    'useSeededBlockedItems' => true,
    'defaultUserModel' => 'App\\Models\\User',
    'laravelBlockerBladeExtended' => 'layouts.app',
    'laravelBlockerTitleExtended' => 'template_title',
    'blockerBootstapVersion' => '4',
    'blockerBootstrapCardClasses' => '',
    'blockerBladePlacement' => 'yield',
    'blockerBladePlacementCss' => 'template_linked_css',
    'blockerBladePlacementJs' => 'footer_scripts',
    'enablejQueryCDN' => false,
    'JQueryCDN' => 'https://code.jquery.com/jquery-3.3.1.min.js',
    'blockerEnableFontAwesomeCDN' => true,
    'blockerFontAwesomeCDN' => 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
    'tooltipsEnabled' => true,
    'jQueryIpMaskEnabled' => true,
    'jQueryIpMaskCDN' => 'https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js',
    'blockerFlashMessagesEnabled' => false,
    'enableSearchBlocked' => true,
    'authEnabled' => true,
    'rolesEnabled' => true,
    'rolesMiddlware' => 
    array (
      0 => 'activated',
      1 => 'role:admin',
      2 => 'activity',
      3 => 'twostep',
    ),
    'blockerPaginationEnabled' => false,
    'blockerPaginationPerPage' => 25,
    'blockerDatatables' => false,
    'enabledDatatablesJs' => false,
    'datatablesJsStartCount' => 25,
    'datatablesCssCDN' => 'https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
    'datatablesJsCDN' => 'https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
    'datatablesJsPresetCDN' => 'https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
    'blockerDefaultAction' => 'abort',
    'blockerDefaultActionAbortType' => '403',
    'blockerDefaultActionView' => 'welcome',
    'blockerDefaultActionRedirect' => '/',
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => '/home/user/Documents/web-app/laravel-auth/storage/logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => '/home/user/Documents/web-app/laravel-auth/storage/logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => '/home/user/Documents/web-app/laravel-auth/storage/logs/laravel.log',
      ),
    ),
  ),
  'mail' => 
  array (
    'default' => 'smtp',
    'mailers' => 
    array (
      'smtp' => 
      array (
        'transport' => 'smtp',
        'host' => 'smtp.mailtrap.io',
        'port' => '2525',
        'encryption' => NULL,
        'username' => NULL,
        'password' => NULL,
        'timeout' => NULL,
      ),
      'ses' => 
      array (
        'transport' => 'ses',
      ),
      'mailgun' => 
      array (
        'transport' => 'mailgun',
      ),
      'postmark' => 
      array (
        'transport' => 'postmark',
      ),
      'sendmail' => 
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -bs',
      ),
      'log' => 
      array (
        'transport' => 'log',
        'channel' => NULL,
      ),
      'array' => 
      array (
        'transport' => 'array',
      ),
    ),
    'from' => 
    array (
      'address' => NULL,
      'name' => 'Laravel',
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => '/home/user/Documents/web-app/laravel-auth/resources/views/vendor/mail',
      ),
    ),
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => '',
        'secret' => '',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'suffix' => NULL,
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
      ),
      'social' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'social',
        'expire' => 60,
      ),
    ),
    'failed' => 
    array (
      'driver' => 'database',
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'roles' => 
  array (
    'connection' => NULL,
    'rolesTable' => 'roles',
    'roleUserTable' => 'role_user',
    'permissionsTable' => 'permissions',
    'permissionsRoleTable' => 'permission_role',
    'permissionsUserTable' => 'permission_user',
    'separator' => '.',
    'models' => 
    array (
      'role' => 'jeremykenedy\\LaravelRoles\\Models\\Role',
      'permission' => 'jeremykenedy\\LaravelRoles\\Models\\Permission',
      'defaultUser' => 'App\\Models\\User',
    ),
    'pretend' => 
    array (
      'enabled' => false,
      'options' => 
      array (
        'hasRole' => true,
        'hasPermission' => true,
        'allowed' => true,
      ),
    ),
    'defaultMigrations' => 
    array (
      'enabled' => false,
    ),
    'defaultSeeds' => 
    array (
      'PermissionsTableSeeder' => true,
      'RolesTableSeeder' => true,
      'ConnectRelationshipsSeeder' => true,
      'UsersTableSeeder' => false,
    ),
    'rolesGuiEnabled' => true,
    'rolesGuiAuthEnabled' => true,
    'rolesGuiMiddlewareEnabled' => true,
    'rolesGuiMiddleware' => 'role:admin',
    'rolesGuiCreateNewRolesMiddlewareType' => 'role',
    'rolesGuiCreateNewRolesMiddleware' => 'admin',
    'rolesGuiCreateNewPermissionMiddlewareType' => 'role',
    'rolesGuiCreateNewPermissionsMiddleware' => 'admin',
    'bladeExtended' => 'layouts.app',
    'bladePlacement' => 'yield',
    'bladePlacementCss' => 'template_linked_css',
    'bladePlacementJs' => 'footer_scripts',
    'titleExtended' => 'template_title',
    'bootstapVersion' => '4',
    'bootstrapCardClasses' => '',
    'tooltipsEnabled' => true,
    'enablejQueryCDN' => true,
    'JQueryCDN' => 'https://code.jquery.com/jquery-3.5.1.min.js',
    'enableSelectizeJsCDN' => true,
    'SelectizeJsCDN' => 'https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js',
    'enableSelectizeJs' => true,
    'enableSelectizeJsCssCDN' => true,
    'SelectizeJsCssCDN' => 'https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.min.css',
    'enableFontAwesomeCDN' => true,
    'fontAwesomeCDN' => 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
    'builtInFlashMessagesEnabled' => false,
    'rolesApiEnabled' => false,
    'rolesAPIAuthEnabled' => true,
    'rolesAPIMiddlewareEnabled' => true,
    'rolesAPIMiddleware' => 'role:admin',
    'rolesAPICreateNewRolesMiddlewareType' => 'role',
    'rolesAPICreateNewRolesMiddleware' => 'admin',
    'rolesAPICreateNewPermissionMiddlewareType' => 'role',
    'rolesAPICreateNewPermissionsMiddleware' => 'admin',
    'enabledDatatablesJs' => false,
    'datatablesJsStartCount' => 25,
    'datatablesCssCDN' => 'https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
    'datatablesJsCDN' => 'https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
    'datatablesJsPresetCDN' => 'https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
    'laravelUsersEnabled' => true,
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
    ),
    'ses' => 
    array (
      'key' => NULL,
      'secret' => NULL,
      'region' => 'us-east-1',
    ),
    'sparkpost' => 
    array (
      'secret' => NULL,
    ),
    'stripe' => 
    array (
      'model' => 'App\\Models\\User',
      'key' => NULL,
      'secret' => NULL,
    ),
    'facebook' => 
    array (
      'client_id' => 'YOURFACEBOOKidHERE',
      'client_secret' => 'YOURFACEBOOKsecretHERE',
      'redirect' => 'https://YOURWEBURLHERE.COM/social/handle/facebook',
    ),
    'twitter' => 
    array (
      'client_id' => 'YOURTWITTERidHERE',
      'client_secret' => 'YOURTWITTERkeyHERE',
      'redirect' => 'https://YOURWEBURLHERE.COM/social/handle/twitter',
    ),
    'google' => 
    array (
      'client_id' => 'YOURGOOGLEPLUSidHERE',
      'client_secret' => 'YOURGOOGLEPLUSsecretHERE',
      'redirect' => 'https://YOURWEBURLHERE.COM/social/handle/google',
    ),
    'github' => 
    array (
      'client_id' => 'YOURIDHERE',
      'client_secret' => 'YOURSECRETHERE',
      'redirect' => NULL,
    ),
    'youtube' => 
    array (
      'client_id' => 'YOURKEYHERE',
      'client_secret' => 'YOURSECRETHERE',
      'redirect' => 'https://YOURWEBURLHERE.COM/social/handle/youtube',
    ),
    'twitch' => 
    array (
      'client_id' => 'YOURKEYHERE',
      'client_secret' => 'YOURSECRETHERE',
      'redirect' => 'https://YOURWEBURLHERE.COM/social/handle/twitch',
    ),
    'instagram' => 
    array (
      'client_id' => 'YOURKEYHERE',
      'client_secret' => 'YOURSECRETHERE',
      'redirect' => 'https://YOURWEBURLHERE.COM/social/handle/instagram',
    ),
    '37signals' => 
    array (
      'client_id' => 'YOURKEYHERE',
      'client_secret' => 'YOURSECRETHERE',
      'redirect' => 'https://YOURWEBURLHERE.COM/social/handle/37signals',
    ),
    'linkedin' => 
    array (
      'client_id' => NULL,
      'client_secret' => NULL,
      'redirect' => NULL,
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => '/home/user/Documents/web-app/laravel-auth/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'laravel_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => NULL,
    'http_only' => true,
    'same_site' => 'lax',
  ),
  'settings' => 
  array (
    'app_project_version' => '8',
    'activation' => true,
    'timePeriod' => '24',
    'maxAttempts' => '3',
    'nullIpAddress' => '0.0.0.0',
    'restoreUserEncType' => 'AES-256-ECB',
    'restoreUserCutoff' => '31',
    'userListPaginationSize' => '50',
    'restoreKey' => '',
    'reCaptchStatus' => true,
    'reCaptchSite' => 'YOURGOOGLECAPTCHAsitekeyHERE',
    'reCaptchSecret' => 'YOURGOOGLECAPTCHAsecretHERE',
    'googleMapsAPIStatus' => true,
    'googleMapsAPIKey' => 'YOURGOOGLEMAPSkeyHERE',
    'dropZoneJsCDN' => 'https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js',
    'googleanalyticsId' => '',
  ),
  'usersmanagement' => 
  array (
    'enablePagination' => true,
    'paginateListSize' => '50',
    'enableSearchUsers' => true,
    'enabledDatatablesJs' => false,
    'datatablesJsStartCount' => 25,
    'datatablesCssCDN' => 'https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css',
    'datatablesJsCDN' => 'https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js',
    'datatablesJsPresetCDN' => 'https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js',
    'tooltipsEnabled' => true,
    'enableBootstrapPopperJsCdn' => true,
    'bootstrapPopperJsCdn' => 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js',
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => '/home/user/Documents/web-app/laravel-auth/resources/views',
    ),
    'compiled' => '/home/user/Documents/web-app/laravel-auth/storage/framework/views',
  ),
  'flare' => 
  array (
    'key' => NULL,
    'reporting' => 
    array (
      'anonymize_ips' => true,
      'collect_git_information' => false,
      'report_queries' => true,
      'maximum_number_of_collected_queries' => 200,
      'report_query_bindings' => true,
      'report_view_data' => true,
      'grouping_type' => NULL,
      'report_logs' => true,
      'maximum_number_of_collected_logs' => 200,
      'censor_request_body_fields' => 
      array (
        0 => 'password',
      ),
    ),
    'send_logs_as_events' => true,
    'censor_request_body_fields' => 
    array (
      0 => 'password',
    ),
  ),
  'ignition' => 
  array (
    'editor' => 'phpstorm',
    'theme' => 'light',
    'enable_share_button' => true,
    'register_commands' => false,
    'ignored_solution_providers' => 
    array (
      0 => 'Facade\\Ignition\\SolutionProviders\\MissingPackageSolutionProvider',
    ),
    'enable_runnable_solutions' => NULL,
    'remote_sites_path' => '',
    'local_sites_path' => '',
    'housekeeping_endpoint_prefix' => '_ignition',
  ),
  'image' => 
  array (
    'driver' => 'gd',
  ),
  'laravelexceptionnotifier' => 
  array (
    'emailExceptionEnabled' => false,
    'emailExceptionEnabledDefault' => true,
    'emailExceptionFrom' => NULL,
    'emailExceptionFromDefault' => 'email@email.com',
    'emailExceptionsTo' => 'email1@gmail.com, email2@gmail.com',
    'emailExceptionsToDefault' => 'email@email.com',
    'emailExceptionCCto' => '',
    'emailExceptionCCtoDefault' => 
    array (
    ),
    'emailExceptionBCCto' => '',
    'emailExceptionBCCtoDefault' => 
    array (
    ),
    'emailExceptionSubject' => '',
    'emailExceptionSubjectDefault' => 'Error on local',
    'emailExceptionView' => 'emails.exception',
  ),
  'LaravelHttps' => 
  array (
    'httpsAccessDeniedErrorCode' => 403,
  ),
  'LaravelLogger' => 
  array (
    'loggerDatabaseConnection' => 'mysql',
    'loggerDatabaseTable' => 'laravel_logger_activity',
    'rolesEnabled' => true,
    'rolesMiddlware' => 'role:admin',
    'loggerMiddlewareEnabled' => true,
    'loggerMiddlewareExcept' => 
    array (
    ),
    'logAllAuthEvents' => false,
    'logAuthAttempts' => false,
    'logFailedAuthAttempts' => true,
    'logLockOut' => true,
    'logPasswordReset' => true,
    'logSuccessfulLogin' => true,
    'logSuccessfulLogout' => true,
    'enableSearch' => 'false',
    'searchFields' => 'description,user,method,route,ip',
    'defaultUserModel' => 'App\\Models\\User',
    'defaultUserIDField' => 'id',
    'disableRoutes' => false,
    'loggerPaginationEnabled' => true,
    'loggerPaginationPerPage' => '25',
    'loggerDatatables' => false,
    'loggerDatatablesCSScdn' => 'https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css',
    'loggerDatatablesJScdn' => 'https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js',
    'loggerDatatablesJSVendorCdn' => 'https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js',
    'enableSubMenu' => true,
    'enableDrillDown' => true,
    'logDBActivityLogFailuresToFile' => true,
    'enablePackageFlashMessageBlade' => false,
    'loggerBladeExtended' => 'layouts.app',
    'bootstapVersion' => '4',
    'bootstrapCardClasses' => '',
    'bladePlacement' => 'yield',
    'bladePlacementCss' => 'template_linked_css',
    'bladePlacementJs' => 'footer_scripts',
    'enablejQueryCDN' => false,
    'JQueryCDN' => 'https://code.jquery.com/jquery-2.2.4.min.js',
    'enableBootstrapCssCDN' => false,
    'bootstrapCssCDN' => 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css',
    'enableBootstrapJsCDN' => false,
    'bootstrapJsCDN' => 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js',
    'enablePopperJsCDN' => true,
    'popperJsCDN' => 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js',
    'enableFontAwesomeCDN' => false,
    'fontAwesomeCDN' => 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
  ),
  'trustedproxy' => 
  array (
    'proxies' => NULL,
    'headers' => 94,
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'alias' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
