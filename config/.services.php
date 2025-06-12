<?php
/**
 * Файл конфигурации менеджера служб и компонентов.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    /** Коллекция */
    'collection' => '\Gm\Stdlib\Collection',
    // Маршрутизатор запросов
    'router' => '\Gm\Router\Router',
    // Конфигуратор
    'config' => '\Gm\Config\Config',
    // MIME-типы содержимого файла
    'mimes' => '\Gm\Config\Mimes',
    // Менеджер плагинов
    'pluginManager' => '\Gm\ServiceManager\PluginManager',
    // Менеджер представлений
    'viewManager' => '\Gm\View\ViewManager',
    // Помощник модели представления
    'viewHelperManager' => '\Gm\View\HelperManager',
    // Менеджер событий
    'eventManager' => '\Gm\Event\EventManager',
    // Менеджер валидации входных данных
    'validatorManager' => '\Gm\Validator\ValidatorManager',
    // Менеджер шорткодов (shortcodes)
    'shortcodeManager' => '\Gm\Shortcode\ShortcodeManager',
    // Версия
    'version' => '\Gm\Version\Version',
    // HTTP-ответ
    'response' => '\Gm\Http\Response',
    /** Менеджер меток (тегов) */
    'tagger' => '\Gm\Tagger\Tagger',
    /** Менеджер терминов */
    'terms' => '\Gm\Terms\Terms',

    /** Cлужба "Страницы сайта" */
    'page' => '\Gm\Site\Page',

    /** Cлужба "Версия приложения" */
    'version' => '\App\Version',

    /** Cлужба "Лицензия" */
    'license' => '\Gm\License\License',

    /** Cлужба "Локализация приложения" */
    'locale' => '\Gm\I18n\Locale',

    /** Cлужба "Локализатор сообщений" */
    'translator' => '\Gm\I18n\Translator',

    /** Cлужба "Пользователь" */
    'user' => [
        'class'         => '\Gm\User\User',
        'identityClass' => '\Gm\User\UserIdentity',
        'storageClass'  => '\Gm\User\UserSessionStorage'
    ],

    /** Cлужба "Кэш" */
    'cache' => [
        'class'    => '\Gm\Cache\Cache',
        'enabled'  => false,
        'default'  => 'filesystem',
        'path'     => '@runtime/cache',
        'adapters' => [
            /*
             * Адаптер Redis.
             */
            'redis' => [
                'dsn'     => 'redis://127.0.0.1:6379',
                'options' => [
                    // включает / отключает ленивые подключения к серверной части
                    'lazy' => false,
                    // включает / отключает использование персистентных соединений
                    'persistent' => 0,
                    // указывает персистентный id строки, используемой для персистентного соединения
                    'persistent_id' => null,
                    // задает тайм-аут TCP-keepalive (в сек.) соединения
                    'tcp_keepalive' => 0,
                    // указывает время (в сек.), используемое для подключения в серверу Redis до тайм-аута попытки соединения
                    'timeout' => 30,
                    // указывает время (в сек.), используемое при выполнение операций чтения в основном источнике сети до тайм-аута операции
                    'read_timeout' => 0,
                    // указывает промежуток (в млс.) между попытками повторного соединения в случае, если клиент потеряет соединение с сервером
                    'retry_interval' => 0,
                ]
            ],
            /*
             * Адаптер Memcached.
             */
            'memcached'  => [
                'dsn'     => 'memcached://localhost:11211',
                'options' => [
                    // включает / отключает сжатие нагрузки, когда значения объектов, превышающие 100 байтов
                    'compression' => true,
                    // включает / отключает поведение, совместимое с "libketama"
                    'libketama_compatible' => true,
                    // тайм-аут (в млс.) операций соединения сокета, при включённой опции no_block
                    'connect_timeout' => 1000,
                    // указывает, как сериализатор использовать для сериализации нескалярных значений: "php", "igbinary"
                    'serializer' => 'php',
                    // алгоритм хеширования, использованный для ключей объектов
                    'hash' => 'md5',
                    // включает / отключает асинхронные операции ввода и вывода
                    'no_block' => true
                ]
            ],
            /*
             * Адаптер Filesystem.
             */
            'filesystem' => [
                // каталог основного кеша (если null, соответсвует параметру "path" кэша)
                'directory' => '@runtime/cache'
            ]
        ]
    ],

    /** Cлужба "Язык" */
    'language' => [
        'class'       => '\Gm\Language\Language',
        'position'    => 'prefix',
        'slugParam'   => 'ln',
        'path'        => __DIR__ . '/../lang',
        'patterns'    => [
            'format' => [
                'basePath' => __DIR__ . '/../lang',
                'pattern'  => 'format.php',
            ],
            'messages' => [
                'basePath' => __DIR__ . '/../lang',
                'pattern'  => 'messages.php',
            ],
            'api' => [
                'basePath' => __DIR__ . '/../lang',
                'pattern'  => 'api.php',
            ],
            BACKEND => [
                'basePath' => __DIR__ . '/../lang',
                'pattern'  => 'backend.php',
            ]
        ],
        'autoload'  => ['messages'],
        'available' => [
                'class'        => '\Gm\Language\AvailableLanguage',
                'filename'     => __DIR__ . '/.language.php',
                'useSerialize' => true
        ]
    ],

    /** Cлужба "Менеджер модулей" */
    'modules' => '\Gm\ModuleManager\ModuleManager',

    /** Cлужба "Менеджер расширений" */
    'extensions' => '\Gm\ExtensionManager\ExtensionManager',

    /** Cлужба "Почта" */
    'mail' => [
        'class'          => '\Gm\Mail\Mail',
        'adapterClasses' => [
            'phpMailer' => '\Gm\Mail\Adapter\PHPMailerAdapter'
        ],
        'defaultAdapter' => 'phpMailer'
    ],

    /** Cлужба "Менеджер пакетов обновлений" */
    'updates' => '\Gm\Updates\PackageManager',

    /** Cлужба "Мультисайт" */
    'multiSite' => '\Gm\MultiSite\MultiSite',

    /** Cлужба "Менеджер шорткодов" */
    'shortcodes' => [
        'class'  => '\Gm\Shortcode\ShortcodeManager',
        'config' => [
            'class'        => '\Gm\Config\Config',
            'filename'     => __DIR__ . '/.shortcodes.php',
            'useSerialize' => true
        ]
    ],

    /** Cлужба "Менеджер виджетов" */
    'widgets' => [
        'class'  => '\Gm\WidgetManager\WidgetManager',
        'config' => [
            'class'        => '\Gm\Config\Config',
            'filename'     => __DIR__ . '/.widgets.php',
            'useSerialize' => true
        ]
    ],

    /** Cлужба "Менеджер плагинов" */
    'plugins' => [
        'class'  => '\Gm\PluginManager\PluginManager',
        'config' => [
            'class'        => '\Gm\Config\Config',
            'filename'     => __DIR__ . '/.plugins.php',
            'useSerialize' => true
        ]
    ],

    /** Cлужба "Адаптер подключения к серверу базы данных" */
    'db' => [
        'class' => '\Gm\Db\Adapter\Adapter',
        'config' => [
            'class'        => '\Gm\Config\Config',
            'name'         => 'connections',
            'filename'     => __DIR__ . '/.database.php',
            'useSerialize' => false
        ],
        'connectionName'  => 'default',
        'enableProfiling' => true,
        'autoConnect'     => true
    ],

    /** Cлужба "Менеджер файловой системы" */
    'fileSystem' => [
        'class'   => '\Gm\Filesystem\FilesystemManager',
        'config' => [
            'class'        => '\Gm\Config\Config',
            'filename'     => __DIR__ . '/.filesystem.php',
            'useSerialize' => false
        ]
    ],

    /** Cлужба "Менеджер IP-адресов" */
    'ip'  => [
        'class' => '\Gm\IpManager\IpManager',
        'listOptions' => [
            'black'   => [
                'adapter'   => 'dbList',
                'tableName' => '{{ip_blacklist}}'
            ],
            'white'   => [
                'adapter'   => 'dbList',
                'tableName' => '{{ip_whitelist}}'
            ],
            'blocked' => [
                'adapter'   => 'dbBlock',
                'tableName' => '{{ip_blocklist}}'
            ]
        ]
    ],

    /** Cлужба "URL-менеджер" */
    'urlManager' => [
        'class'               => '\Gm\Url\UrlManager',
        'enableTrailingSlash' => false,
        'enablePrettyUrl'     => true,
        'showScriptName'      => false,
        'scriptBaseUrl'       => false,
        'routeParam'          => 'r'
    ],

    /** Cлужба "URL-правила" */
    'urlRules' => [
        'class' => '\Gm\Site\Url\UrlRules',
        'rule'  => 'CategoryAndArticleNameExt',
        'rules' => [
            'CategoryAndArticleNameExt' => [
                'suffix' => '.html'
            ]
        ]
    ],

    /** Cлужба "Журнал аудита действий пользователей" */
    'audit' => [
        'class'    => '\Gm\Panel\Audit\Audit',
        'sections' => ['user', 'controller', 'module', 'request', 'device'],
        'storage'  => [
            'class'     => '\Gm\Panel\Audit\Storage\DbStorage',
            'tableName' => '{{audit}}',
            'limit'     => 1000
        ],
        'enabled' => true
    ],

    /** Cлужба "Логгер" */
    'logger' => [
        'class'   => '\Gm\Log\Logger',
        'targets' => [
            'application'    => [
                'writer'     => 'error',
                'enabled'    => true,
                'logFile'    => '@runtime/log/app.log',
                'severities' => '*'
            ],
            'debug' => [
                'writer'     => 'debug',
                'enabled'    => true,
                'autoCreate' => true,
                'path'       => '@runtime/log'
            ],
        ],
        'enabled' => false
    ],

    /** Cлужба "Сессия" */
    'session' => [
        'class'      => '\Gm\Session\Session',
        'name'       => 'gsid',
        'autoOpen'   => true,
        'useCookies' => true,
        'useTransparentSessionId' => false
    ],

    /** Cлужба "Загрузчик" */
    'uploader' => [
        'class'     => '\Gm\Uploader\Uploader',
        'localPath' => '/uploads',
        'baseUrl'   => '/uploads',
    ],

    /** Cлужба "Скрипты клиента" */
    'clientScript' => [
        'class'         => '\Gm\View\ClientScript',
        'showSchemeUrl' => false,
        'localPath'     => PUBLIC_BASE_URL,
        'baseUrl'       => '',
        'vendorUrl'     => '/vendors'
    ],

    /** Cлужба "Форматтер" */
    'formatter' => [
        'class'          => '\Gm\I18n\Formatter',
        'timeZone'       => 'Europe/London',
        'dateFormat'     => 'php:d/m/Y',
        'timeFormat'     => 'H:i:s',
        'dateTimeFormat' => 'php:d/m/Y H:i:s'
    ],

    /** Cлужба "Тема" (frontend), псевдоним "theme" */
    'frontendTheme' => [
        'class'           => '\Gm\Theme\Theme',
        'themesLocalPath' => '/themes',
        'side'            => FRONTEND,
        'unifiedName'     => 'frontendTheme',
        'default'         => 'Impact',
        'available'       => [
            'Impact' => [
                'name'      => 'Impact',
                'localPath' => '/impact'
            ]
        ]
    ],

    /** Cлужба "Тема" (backend), псевдоним "theme" */
    'backendTheme' => [
        'class'           => '\Gm\Theme\Theme',
        'themesLocalPath' => '/themes/backend',
        'side'            => BACKEND,
        'unifiedName'     => 'backendTheme',
        'default'         => 'Green',
        'available'       => [
            'Green' => [
                'name'      => 'Green',
                'localPath' => '/green'
            ]
        ]
    ],

    /** Cлужба "Отчёт ошибок" */
    'report' => [
        'class'               => '\Gm\Report\Report',
        'name'                => 'report',
        'enable'              => true,
        'responseClass'       => ['jsonResponse'],
        'backendOnly'         => true,
        'authorizedUsersOnly' => true,
        'crypt'               => true,
        'cryptKey'            => 'b1f4f9a523e36fd969f4573e25af4540',
    ],

    /** Cлужба "FontAwesome" */
    'fontAwesome' => '\Gm\FontAwesome\FontAwesome'
];
