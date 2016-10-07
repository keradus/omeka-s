<?php
return [
    'session' => [
        'config' => [],
        'save_handler' => null,
    ],
    'listeners' => [
        'ModuleRouteListener',
        'Omeka\MvcExceptionListener',
        'Omeka\MvcListeners',
    ],
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_path_stack'      => [
            OMEKA_PATH . '/application/view-shared',
        ],
        'strategies' => [
            'Omeka\ViewApiJsonStrategy',
        ],
    ],
    'assets' => [
        'use_externals' => true,
        'externals' => [
            'Omeka' => [
                'js/jquery.js' => '//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js',
            ],
        ],
    ],
    'permissions' => [
        'acl_resources' => [
            'Omeka\Module\Manager',
        ],
    ],
    'temp_dir' => sys_get_temp_dir(),
    'entity_manager' => [
        'is_dev_mode' => false,
        'mapping_classes_paths' => [
            OMEKA_PATH . '/application/src/Entity',
        ],
        'resource_discriminator_map' => [
            'Omeka\Entity\Item'    => 'Omeka\Entity\Item',
            'Omeka\Entity\Media'   => 'Omeka\Entity\Media',
            'Omeka\Entity\ItemSet' => 'Omeka\Entity\ItemSet',
        ],
        'filters' => [
            'resource_visibility' => 'Omeka\Db\Filter\ResourceVisibilityFilter',
        ],
        'functions' => [
             'datetime' => [
                'convert_tz' => 'DoctrineExtensions\Query\Mysql\ConvertTz',
                'date' => 'DoctrineExtensions\Query\Mysql\Date',
                'date_format' => 'DoctrineExtensions\Query\Mysql\DateFormat',
                'dateadd' => 'DoctrineExtensions\Query\Mysql\DateAdd',
                'datesub' => 'DoctrineExtensions\Query\Mysql\DateSub',
                'datediff' => 'DoctrineExtensions\Query\Mysql\DateDiff',
                'day' => 'DoctrineExtensions\Query\Mysql\Day',
                'dayname' => 'DoctrineExtensions\Query\Mysql\DayName',
                'dayofweek' => 'DoctrineExtensions\Query\Mysql\DayOfWeek',
                'dayofyear' => 'DoctrineExtensions\Query\Mysql\DayOfYear',
                'div' => 'DoctrineExtensions\Query\Mysql\Div',
                'from_unixtime' => 'DoctrineExtensions\Query\Mysql\FromUnixtime',
                'hour' => 'DoctrineExtensions\Query\Mysql\Hour',
                'last_day' => 'DoctrineExtensions\Query\Mysql\LastDay',
                'minute' => 'DoctrineExtensions\Query\Mysql\Minute',
                'now' => 'DoctrineExtensions\Query\Mysql\Now',
                'month' => 'DoctrineExtensions\Query\Mysql\Month',
                'monthname' => 'DoctrineExtensions\Query\Mysql\MonthName',
                'second' => 'DoctrineExtensions\Query\Mysql\Second',
                'strtodate' => 'DoctrineExtensions\Query\Mysql\StrToDate',
                'time' => 'DoctrineExtensions\Query\Mysql\Time',
                'timediff' => 'DoctrineExtensions\Query\Mysql\TimeDiff',
                'timestampadd' => 'DoctrineExtensions\Query\Mysql\TimestampAdd',
                'timestampdiff' => 'DoctrineExtensions\Query\Mysql\TimestampDiff',
                'timetosec' => 'DoctrineExtensions\Query\Mysql\TimeToSec',
                'week' => 'DoctrineExtensions\Query\Mysql\Week',
                'weekday' => 'DoctrineExtensions\Query\Mysql\WeekDay',
                'year' => 'DoctrineExtensions\Query\Mysql\Year',
                'yearweek' => 'DoctrineExtensions\Query\Mysql\YearWeek',
                'unix_timestamp' => 'DoctrineExtensions\Query\Mysql\UnixTimestamp',
            ],
            'numeric' => [
                'acos' => 'DoctrineExtensions\Query\Mysql\Acos',
                'asin' => 'DoctrineExtensions\Query\Mysql\Asin',
                'atan2' => 'DoctrineExtensions\Query\Mysql\Atan2',
                'atan' => 'DoctrineExtensions\Query\Mysql\Atan',
                'bit_count' => 'DoctrineExtensions\Query\Mysql\BitCount',
                'bit_xor' => 'DoctrineExtensions\Query\Mysql\BitXor',
                'ceil' => 'DoctrineExtensions\Query\Mysql\Ceil',
                'cos' => 'DoctrineExtensions\Query\Mysql\Cos',
                'cot' => 'DoctrineExtensions\Query\Mysql\Cot',
                'floor' => 'DoctrineExtensions\Query\Mysql\Floor',
                'pi' => 'DoctrineExtensions\Query\Mysql\Pi',
                'power' => 'DoctrineExtensions\Query\Mysql\Power',
                'quarter' => 'DoctrineExtensions\Query\Mysql\Quarter',
                'rand' => 'DoctrineExtensions\Query\Mysql\Rand',
                'round' => 'DoctrineExtensions\Query\Mysql\Round',
                'stddev' => 'DoctrineExtensions\Query\Mysql\StdDev',
                'sin' => 'DoctrineExtensions\Query\Mysql\Sin',
                'std' => 'DoctrineExtensions\Query\Mysql\Std',
                'tan' => 'DoctrineExtensions\Query\Mysql\Tan',
            ],
            'string' => [
                'ascii' => 'DoctrineExtensions\Query\Mysql\Ascii',
                'binary' => 'DoctrineExtensions\Query\Mysql\Binary',
                'char_length' => 'DoctrineExtensions\Query\Mysql\CharLength',
                'concat_ws' => 'DoctrineExtensions\Query\Mysql\ConcatWs',
                'countif' => 'DoctrineExtensions\Query\Mysql\CountIf',
                'crc32' => 'DoctrineExtensions\Query\Mysql\Crc32',
                'degrees' => 'DoctrineExtensions\Query\Mysql\Degrees',
                'field' => 'DoctrineExtensions\Query\Mysql\Field',
                'find_in_set' => 'DoctrineExtensions\Query\Mysql\FindInSet',
                'greatest' => 'DoctrineExtensions\Query\Mysql\Greatest',
                'group_concat' => 'DoctrineExtensions\Query\Mysql\GroupConcat',
                'ifelse' => 'DoctrineExtensions\Query\Mysql\IfElse',
                'ifnull' => 'DoctrineExtensions\Query\Mysql\IfNull',
                'least' => 'DoctrineExtensions\Query\Mysql\Least',
                'lpad' => 'DoctrineExtensions\Query\Mysql\Lpad',
                'match' => 'DoctrineExtensions\Query\Mysql\MatchAgainst',
                'md5' => 'DoctrineExtensions\Query\Mysql\Md5',
                'nullif' => 'DoctrineExtensions\Query\Mysql\NullIf',
                'radians' => 'DoctrineExtensions\Query\Mysql\Radians',
                'regexp' => 'DoctrineExtensions\Query\Mysql\Regexp',
                'replace' => 'DoctrineExtensions\Query\Mysql\Replace',
                'rpad' => 'DoctrineExtensions\Query\Mysql\Rpad',
                'sha1' => 'DoctrineExtensions\Query\Mysql\Sha1',
                'sha2' => 'DoctrineExtensions\Query\Mysql\Sha2',
                'soundex' => 'DoctrineExtensions\Query\Mysql\Soundex',
                'substring_index' => 'DoctrineExtensions\Query\Mysql\SubstringIndex',
                'uuid_short' => 'DoctrineExtensions\Query\Mysql\UuidShort',
                'hex' => 'DoctrineExtensions\Query\Mysql\Hex',
                'unhex' => 'DoctrineExtensions\Query\Mysql\Unhex',
            ],
        ],
        'proxy_paths' => [
            OMEKA_PATH . '/application/data/doctrine-proxies',
        ]
    ],
    'installer' => [
        'pre_tasks' => [
            'Omeka\Installation\Task\CheckEnvironmentTask',
            'Omeka\Installation\Task\CheckDirPermissionsTask',
            'Omeka\Installation\Task\CheckDbConfigurationTask',
        ],
        'tasks' => [
            'Omeka\Installation\Task\DestroySessionTask',
            'Omeka\Installation\Task\ClearCacheTask',
            'Omeka\Installation\Task\InstallSchemaTask',
            'Omeka\Installation\Task\RecordMigrationsTask',
            'Omeka\Installation\Task\InstallDefaultVocabulariesTask',
            'Omeka\Installation\Task\InstallDefaultTemplatesTask',
            'Omeka\Installation\Task\CreateFirstUserTask',
            'Omeka\Installation\Task\AddDefaultSettingsTask',
        ],
    ],
    'translator' => [
        'locale' => 'en_US',
        'translation_file_patterns' => [
            [
                'type'        => 'gettext',
                'base_dir'    => OMEKA_PATH . '/application/language',
                'pattern'     => '%s.mo',
                'text_domain' => null,
            ],
        ],
    ],
    'logger' => [
        'log'  => false,
        'path' => OMEKA_PATH . '/logs/application.log',
        'priority' => \Zend\Log\Logger::NOTICE,
    ],
    'http_client' => [
        'adapter'   => 'Zend\Http\Client\Adapter\Socket',
        'sslcapath' => null,
        'sslcafile' => null,
    ],
    'cli' => [
        'execute_strategy' => 'exec',
        'phpcli_path' => null,
    ],
    'file_manager' => [
        'store' => 'Omeka\File\LocalStore',
        'thumbnailer' => 'Omeka\File\ImageMagickThumbnailer',
        'thumbnail_types' => [
            'large' => [
                'strategy' => 'default',
                'constraint' => 800,
                'options' => [],
            ],
            'medium' => [
                'strategy' => 'default',
                'constraint' => 400,
                'options' => [],
            ],
            'square' => [
                'strategy' => 'square',
                'constraint' => 200,
                'options' => [
                    'gravity' => 'center',
                ],
            ],
        ],
        'thumbnail_options' => [
            'imagemagick_dir' => null,
            'page' => 0,
        ],
        'thumbnail_fallbacks' => [
            'default' => ['thumbnails/default.png', 'Omeka'],
            'fallbacks' => [
                'image' => ['thumbnails/image.png', 'Omeka'],
                'video' => ['thumbnails/video.png', 'Omeka'],
                'audio' => ['thumbnails/audio.png', 'Omeka'],
            ],
        ],
    ],
    'service_manager' => [
        'abstract_factories' => [
            'Zend\Navigation\Service\NavigationAbstractServiceFactory',
        ],
        'factories' => [
            'Omeka\Acl'                   => 'Omeka\Service\AclFactory',
            'Omeka\ApiAdapterManager'     => 'Omeka\Service\ApiAdapterManagerFactory',
            'Omeka\ApiManager'          => 'Omeka\Service\ApiManagerFactory',
            'Omeka\AuthenticationService' => 'Omeka\Service\AuthenticationServiceFactory',
            'Omeka\EntityManager'         => 'Omeka\Service\EntityManagerFactory',
            'Omeka\FileRendererManager'   => 'Omeka\Service\FileRendererManagerFactory',
            'Omeka\Installer'             => 'Omeka\Service\InstallerFactory',
            'Omeka\Logger'                => 'Omeka\Service\LoggerFactory',
            'Omeka\MediaIngesterManager'  => 'Omeka\Service\MediaIngesterManagerFactory',
            'Omeka\MediaRendererManager'  => 'Omeka\Service\MediaRendererManagerFactory',
            'Omeka\MigrationManager'      => 'Omeka\Service\MigrationManagerFactory',
            'Omeka\ViewApiJsonStrategy'   => 'Omeka\Service\ViewApiJsonStrategyFactory',
            'Omeka\JobDispatcher'         => 'Omeka\Service\JobDispatcherFactory',
            'Omeka\HttpClient'            => 'Omeka\Service\HttpClientFactory',
            'Omeka\Site\ThemeManager'     => 'Omeka\Service\ThemeManagerFactory',
            'Omeka\Site\NavigationLinkManager' => 'Omeka\Service\NavigationLinkManagerFactory',
            'Omeka\Site\NavigationTranslator' => 'Omeka\Service\SiteNavigationTranslatorFactory',
            'Omeka\File\ImageMagickThumbnailer' => 'Omeka\Service\FileThumbnailer\ImageMagickFactory',
            'Omeka\File\LocalStore'       => 'Omeka\Service\LocalStoreFactory',
            'Omeka\File\MediaTypeMap'     => 'Omeka\Service\MediaTypeMapFactory',
            'Omeka\File\Manager'          => 'Omeka\Service\FileManagerFactory',
            'Omeka\Mailer'                => 'Omeka\Service\MailerFactory',
            'Omeka\HtmlPurifier'          => 'Omeka\Service\HtmlPurifierFactory',
            'Omeka\BlockLayoutManager'    => 'Omeka\Service\BlockLayoutManagerFactory',
            'Omeka\DataTypeManager'       => 'Omeka\Service\DataTypeManagerFactory',
            'Omeka\Cli'                   => 'Omeka\Service\CliFactory',
            'Omeka\Paginator'             => 'Omeka\Service\PaginatorFactory',
            'Omeka\RdfImporter'           => 'Omeka\Service\RdfImporterFactory',
            'Omeka\Settings'            => 'Omeka\Service\SettingsFactory',
            'Omeka\SiteSettings'        => 'Omeka\Service\SiteSettingsFactory',
            'Omeka\JobDispatchStrategy\PhpCli'      => 'Omeka\Service\JobDispatchStrategy\PhpCliFactory',
            'Omeka\JobDispatchStrategy\Synchronous' => 'Omeka\Service\JobDispatchStrategy\SynchronousFactory',
        ],
        'invokables' => [
            'ModuleRouteListener'       => 'Zend\Mvc\ModuleRouteListener',
            'Omeka\MvcExceptionListener'=> 'Omeka\Mvc\ExceptionListener',
            'Omeka\MvcListeners'        => 'Omeka\Mvc\MvcListeners',
            'Omeka\ViewApiJsonRenderer' => 'Omeka\View\Renderer\ApiJsonRenderer',
            'Omeka\File\GdThumbnailer'          => 'Omeka\File\Thumbnailer\GdThumbnailer',
            'Omeka\File\ImagickThumbnailer'     => 'Omeka\File\Thumbnailer\ImagickThumbnailer',
        ],
        'delegators' => [
            'Zend\I18n\Translator\TranslatorInterface' => [
                'Omeka\Service\Delegator\TranslatorDelegatorFactory',
            ],
        ],
        'aliases' => [
            'Omeka\JobDispatchStrategy' => 'Omeka\JobDispatchStrategy\PhpCli',
            'Zend\Authentication\AuthenticationService' => 'Omeka\AuthenticationService'
        ],
        'shared' => [
            'Omeka\Paginator' => false,
            'Omeka\HttpClient' => false,
            'Omeka\File\GdThumbnailer' => false,
        ],
    ],
    'controllers' => [
        'invokables' => [
            'Omeka\Controller\Index'                  => 'Omeka\Controller\IndexController',
            'Omeka\Controller\Maintenance'            => 'Omeka\Controller\MaintenanceController',
            'Omeka\Controller\Site\Index'             => 'Omeka\Controller\Site\IndexController',
            'Omeka\Controller\Site\Item'              => 'Omeka\Controller\Site\ItemController',
            'Omeka\Controller\Site\ItemSet'           => 'Omeka\Controller\Site\ItemSetController',
            'Omeka\Controller\Site\Media'             => 'Omeka\Controller\Site\MediaController',
            'Omeka\Controller\Site\Page'              => 'Omeka\Controller\Site\PageController',
            'Omeka\Controller\Admin\Index'            => 'Omeka\Controller\Admin\IndexController',
            'Omeka\Controller\Admin\ItemSet'          => 'Omeka\Controller\Admin\ItemSetController',
            'Omeka\Controller\Admin\ResourceTemplate' => 'Omeka\Controller\Admin\ResourceTemplateController',
            'Omeka\Controller\Admin\Property'         => 'Omeka\Controller\Admin\PropertyController',
            'Omeka\Controller\Admin\ResourceClass'    => 'Omeka\Controller\Admin\ResourceClassController',
            'Omeka\Controller\Admin\Media'            => 'Omeka\Controller\Admin\MediaController',
            'Omeka\Controller\Admin\Setting'          => 'Omeka\Controller\Admin\SettingController',
            'Omeka\Controller\SiteAdmin\Page'         => 'Omeka\Controller\SiteAdmin\PageController',
        ],
        'factories' => [
            'Omeka\Controller\Login' => 'Omeka\Service\Controller\LoginControllerFactory',
            'Omeka\Controller\Api' => 'Omeka\Service\Controller\ApiControllerFactory',
            'Omeka\Controller\Install' => 'Omeka\Service\Controller\InstallControllerFactory',
            'Omeka\Controller\Migrate' => 'Omeka\Service\Controller\MigrateControllerFactory',
            'Omeka\Controller\Admin\Module' => 'Omeka\Service\Controller\Admin\ModuleControllerFactory',
            'Omeka\Controller\Admin\User' => 'Omeka\Service\Controller\Admin\UserControllerFactory',
            'Omeka\Controller\Admin\Job' => 'Omeka\Service\Controller\Admin\JobControllerFactory',
            'Omeka\Controller\Admin\SystemInfo' => 'Omeka\Service\Controller\Admin\SystemInfoControllerFactory',
            'Omeka\Controller\Admin\Vocabulary' => 'Omeka\Service\Controller\Admin\VocabularyControllerFactory',
            'Omeka\Controller\Admin\Item' => 'Omeka\Service\Controller\Admin\ItemControllerFactory',
            'Omeka\Controller\SiteAdmin\Index' => 'Omeka\Service\Controller\SiteAdmin\IndexControllerFactory',
        ],
    ],
    'controller_plugins' => [
        'invokables' => [
            'messenger' => 'Omeka\Mvc\Controller\Plugin\Messenger',
            'setBrowseDefaults' => 'Omeka\Mvc\Controller\Plugin\SetBrowseDefaults',
            'currentSite' => 'Omeka\Mvc\Controller\Plugin\CurrentSite',
        ],
        'factories' => [
            'api' => 'Omeka\Service\ControllerPlugin\ApiFactory',
            'jobDispatcher' => 'Omeka\Service\ControllerPlugin\JobDispatcherFactory',
            'logger' => 'Omeka\Service\ControllerPlugin\LoggerFactory',
            'paginator' => 'Omeka\Service\ControllerPlugin\PaginatorFactory',
            'translate' => 'Omeka\Service\ControllerPlugin\TranslateFactory',
            'getForm' => 'Omeka\Service\ControllerPlugin\GetFormFactory',
            'userIsAllowed' => 'Omeka\Service\ControllerPlugin\UserIsAllowedFactory',
            'mailer' => 'Omeka\Service\ControllerPlugin\MailerFactory',
            'settings' => 'Omeka\Service\ControllerPlugin\SettingsFactory',
            'siteSettings' => 'Omeka\Service\ControllerPlugin\SiteSettingsFactory',
            'status' => 'Omeka\Service\ControllerPlugin\StatusFactory',
            'viewHelpers' => 'Omeka\Service\ControllerPlugin\ViewHelpersFactory',
        ],
    ],
    'api_adapters' => [
        'invokables' => [
            'users'              => 'Omeka\Api\Adapter\UserAdapter',
            'vocabularies'       => 'Omeka\Api\Adapter\VocabularyAdapter',
            'resource_classes'   => 'Omeka\Api\Adapter\ResourceClassAdapter',
            'resource_templates' => 'Omeka\Api\Adapter\ResourceTemplateAdapter',
            'properties'         => 'Omeka\Api\Adapter\PropertyAdapter',
            'items'              => 'Omeka\Api\Adapter\ItemAdapter',
            'media'              => 'Omeka\Api\Adapter\MediaAdapter',
            'item_sets'          => 'Omeka\Api\Adapter\ItemSetAdapter',
            'modules'            => 'Omeka\Api\Adapter\ModuleAdapter',
            'sites'              => 'Omeka\Api\Adapter\SiteAdapter',
            'site_pages'         => 'Omeka\Api\Adapter\SitePageAdapter',
            'jobs'               => 'Omeka\Api\Adapter\JobAdapter',
            'resources'          => 'Omeka\Api\Adapter\ResourceAdapter',
        ],
    ],
    'view_helpers' => [
        'invokables' => [
            'pageTitle'              => 'Omeka\View\Helper\PageTitle',
            'htmlElement'            => 'Omeka\View\Helper\HtmlElement',
            'hyperlink'              => 'Omeka\View\Helper\Hyperlink',
            'messages'               => 'Omeka\View\Helper\Messages',
            'sortLink'               => 'Omeka\View\Helper\SortLink',
            'sortSelector'           => 'Omeka\View\Helper\SortSelector',
            'propertySelector'       => 'Omeka\View\Helper\PropertySelector',
            'itemSetSelector'        => 'Omeka\View\Helper\ItemSetSelector',
            'formPropertyInputs'     => 'Omeka\View\Helper\PropertyInputs',
            'searchFilters' => 'Omeka\View\Helper\SearchFilters',
            'blockAttachmentsForm' => 'Omeka\View\Helper\BlockAttachmentsForm',
            'ckEditor' => 'Omeka\View\Helper\CkEditor',
            'sitePagePagination' => 'Omeka\View\Helper\SitePagePagination',
            'sectionNav' => 'Omeka\View\Helper\SectionNav',
            'uploadLimit' => 'Omeka\View\Helper\UploadLimit',
            'formRecaptcha' => 'Omeka\Form\View\Helper\FormRecaptcha',
            'formCkeditor' => 'Omeka\Form\View\Helper\FormCkeditor',
            'formCkeditorInline' => 'Omeka\Form\View\Helper\FormCkeditorInline',
            'formRestoreTextarea' => 'Omeka\Form\View\Helper\FormRestoreTextarea',
            'queryToHiddenInputs' => 'Omeka\View\Helper\QueryToHiddenInputs',
            'translateJsStrings' => 'Omeka\View\Helper\TranslateJsStrings',
        ],
        'factories' => [
            'api' => 'Omeka\Service\ViewHelper\ApiFactory',
            'assetUrl' => 'Omeka\Service\ViewHelper\AssetUrlFactory',
            'blockLayout' => 'Omeka\Service\ViewHelper\BlockLayoutFactory',
            'blockThumbnailTypeSelect' => 'Omeka\Service\ViewHelper\BlockThumbnailTypeSelectFactory',
            'blockShowTitleSelect' => 'Omeka\Service\ViewHelper\BlockShowTitleSelectFactory',
            'dataType' => 'Omeka\Service\ViewHelper\DataTypeFactory',
            'i18n' => 'Omeka\Service\ViewHelper\I18nFactory',
            'media' => 'Omeka\Service\ViewHelper\MediaFactory',
            'navigationLink' => 'Omeka\Service\ViewHelper\NavigationLinkFactory',
            'pagination' => 'Omeka\Service\ViewHelper\PaginationFactory',
            'params' => 'Omeka\Service\ViewHelper\ParamsFactory',
            'setting' => 'Omeka\Service\ViewHelper\SettingFactory',
            'siteSetting' => 'Omeka\Service\ViewHelper\SiteSettingFactory',
            'themeSetting' => 'Omeka\Service\ViewHelper\ThemeSettingFactory',
            'trigger' => 'Omeka\Service\ViewHelper\TriggerFactory',
            'userIsAllowed' => 'Omeka\Service\ViewHelper\UserIsAllowedFactory',
            'deleteConfirm' => 'Omeka\Service\ViewHelper\DeleteConfirmFactory',
            'resourceClassSelect' => 'Omeka\Service\ViewHelper\ResourceClassSelectFactory',
            'propertySelect' => 'Omeka\Service\ViewHelper\PropertySelectFactory',
            'itemSetSelect' => 'Omeka\Service\ViewHelper\ItemSetSelectFactory',
        ],
        'delegators' => [
            'Zend\Form\View\Helper\FormElement' => [
                'Omeka\Service\Delegator\FormElementDelegatorFactory',
            ],
            'Zend\Form\View\Helper\FormRow' => [
                'Omeka\Service\Delegator\FormRowDelegatorFactory',
            ],
            'Zend\View\Helper\Navigation' => [
                'Omeka\Service\Delegator\NavigationDelegatorFactory',
            ],
        ],
    ],
    'form_elements' => [
        'initializers' => [
            'Omeka\Form\Initializer\Csrf',
        ],
        'factories' => [
            'Omeka\Form\ResourceForm' => 'Omeka\Service\Form\ResourceFormFactory',
            'Omeka\Form\UserForm' => 'Omeka\Service\Form\UserFormFactory',
            'Omeka\Form\SettingForm' => 'Omeka\Service\Form\SettingFormFactory',
            'Omeka\Form\ModuleStateChangeForm' => 'Omeka\Service\Form\ModuleStateChangeFormFactory',
            'Omeka\Form\SiteForm' => 'Omeka\Service\Form\SiteFormFactory',
            'Omeka\Form\SiteSettingsForm' => 'Omeka\Service\Form\SiteSettingsFormFactory',
            'Omeka\Form\Element\ResourceSelect' => 'Omeka\Service\Form\Element\ResourceSelectFactory',
            'Omeka\Form\Element\ResourceClassSelect' => 'Omeka\Service\Form\Element\ResourceClassSelectFactory',
            'Omeka\Form\Element\PropertySelect' => 'Omeka\Service\Form\Element\PropertySelectFactory',
            'Omeka\Form\Element\ItemSetSelect' => 'Omeka\Service\Form\Element\ItemSetSelectFactory',
            'Omeka\Form\Element\Recaptcha' => 'Omeka\Service\Form\Element\RecaptchaFactory',
            'Omeka\Form\Element\HtmlTextarea' => 'Omeka\Service\Form\Element\HtmlTextareaFactory',
            'Omeka\Form\Element\Ckeditor' => 'Omeka\Service\Form\Element\CkeditorFactory',
            'Omeka\Form\Element\CkeditorInline' => 'Omeka\Service\Form\Element\CkeditorInlineFactory',
        ],
    ],
    'data_types' => [
        'invokables' => [
            'literal' => 'Omeka\DataType\Literal',
            'uri' => 'Omeka\DataType\Uri',
            'resource' => 'Omeka\DataType\Resource',
        ],
    ],
    'block_layouts' => [
        'factories' => [
            'html' => 'Omeka\Service\BlockLayout\HtmlFactory',
        ],
        'invokables' => [
            'pageTitle' => 'Omeka\Site\BlockLayout\PageTitle',
            'media' => 'Omeka\Site\BlockLayout\Media',
            'browsePreview' => 'Omeka\Site\BlockLayout\BrowsePreview',
            'itemShowCase' => 'Omeka\Site\BlockLayout\ItemShowcase',
            'tableOfContents' => 'Omeka\Site\BlockLayout\TableOfContents',
            'lineBreak' => 'Omeka\Site\BlockLayout\LineBreak',
            'itemWithMetadata' => 'Omeka\Site\BlockLayout\ItemWithMetadata',
        ],
        'sorted_names' => [
            'html',
        ],
    ],
    'navigation_links' => [
        'invokables' => [
            'page' => 'Omeka\Site\Navigation\Link\Page',
            'url' => 'Omeka\Site\Navigation\Link\Url',
            'browse' => 'Omeka\Site\Navigation\Link\Browse',
            'browseItemSets' => 'Omeka\Site\Navigation\Link\BrowseItemSets',
        ],
    ],
    'media_ingesters' => [
        'factories' => [
            'upload' => 'Omeka\Service\MediaIngester\UploadFactory',
            'url' => 'Omeka\Service\MediaIngester\UrlFactory',
            'html' => 'Omeka\Service\MediaIngester\HtmlFactory',
            'iiif' => 'Omeka\Service\MediaIngester\IIIFFactory',
            'oembed' => 'Omeka\Service\MediaIngester\OEmbedFactory',
            'youtube' => 'Omeka\Service\MediaIngester\YoutubeFactory',
        ]
    ],
    'media_renderers' => [
        'invokables' => [
            'oembed'  => 'Omeka\Media\Renderer\OEmbed',
            'youtube' => 'Omeka\Media\Renderer\Youtube',
            'html'    => 'Omeka\Media\Renderer\Html',
            'iiif'    => 'Omeka\Media\Renderer\IIIF'
        ],
        'factories' => [
            'file' => 'Omeka\Service\MediaRenderer\FileFactory'
        ]
    ],
    'file_renderers' => [
        'invokables' => [
            'fallback' => 'Omeka\Media\FileRenderer\FallbackRenderer',
            'thumbnail' => 'Omeka\Media\FileRenderer\ThumbnailRenderer',
            'audio' => 'Omeka\Media\FileRenderer\AudioRenderer',
            'video' => 'Omeka\Media\FileRenderer\VideoRenderer',
        ],
        'aliases' => [
            'audio/ogg' => 'audio',
            'audio/x-ogg' => 'audio',
            'audio/aac' => 'audio',
            'audio/x-aac' => 'audio',
            'audio/mpeg' => 'audio',
            'audio/x-mpeg' => 'audio',
            'audio/mp3' => 'audio',
            'audio/x-mp3' => 'audio',
            'audio/mpeg3' => 'audio',
            'audio/x-mpeg-3' => 'audio',
            'audio/x-mpegaudio' => 'audio',
            'audio/x-mpg' => 'audio',
            'audio/mp4' => 'audio',
            'audio/x-mp4' => 'audio',
            'audio/x-m4a' => 'audio',
            'audio/wav' => 'audio',
            'audio/x-wav' => 'audio',
            'audio/aiff' => 'audio',
            'audio/x-aiff' => 'audio',
            'application/ogg' => 'video',
            'video/mp4' => 'video',
            'video/x-m4v' => 'video',
            'video/quicktime' => 'video',
            'video/avi' => 'video',
            'video/ogg' => 'video',
            'video/webm' => 'video',
            'mp3' => 'audio',
        ],
    ],
    'oembed' => [
        'whitelist' => [
            '#^https?://(www\.)?youtube\.com/watch.*$#i',
            '#^https?://(www\.)?youtube\.com/playlist.*$#i',
            '#^https?://youtu\.be/.*$#i',
            '#^http://blip.tv/*$#',
            '#^https?://(.+\.)?vimeo\.com/.*$#i',
            '#^https?://(www\.)?dailymotion\.com/.*$#i',
            '#^http://dai.ly/*$#',
            '#^https?://(www\.)?flickr\.com/.*$#i',
            '#^https?://flic\.kr/.*$#i',
            '#^https?://(.+\.)?smugmug\.com/.*$#i',
            '#^https?://(www\.)?hulu\.com/watch/.*$#i',
            '#^http://revision3.com/*$#',
            '#^http://i*.photobucket.com/albums/*$#',
            '#^http://gi*.photobucket.com/groups/*$#',
            '#^https?://(www\.)?scribd\.com/doc/.*$#i',
            '#^https?://wordpress.tv/.*$#i',
            '#^https?://(.+\.)?polldaddy\.com/.*$#i',
            '#^https?://poll\.fm/.*$#i',
            '#^https?://(www\.)?funnyordie\.com/videos/.*$#i',
            '#^https?://(www\.)?twitter\.com/.+?/status(es)?/.*$#i',
            '#^https?://(www\.)?soundcloud\.com/.*$#i',
            '#^https?://(www\.)?slideshare\.net/.*$#i',
            '#^https?://(www\.)?rdio\.com/.*$#i',
            '#^https?://rd\.io/x/.*$#i',
            '#^https?://(open|play)\.spotify\.com/.*$#i',
            '#^https?://(.+\.)?imgur\.com/.*$#i',
            '#^https?://(www\.)?meetu(\.ps|p\.com)/.*$#i',
            '#^https?://(www\.)?issuu\.com/.+/docs/.+$#i',
            '#^https?://(www\.)?collegehumor\.com/video/.*$#i',
            '#^https?://(www\.)?mixcloud\.com/.*$#i',
            '#^https?://(www\.|embed\.)?ted\.com/talks/.*$#i',
            '#^https?://(www\.)?(animoto|video214)\.com/play/.*$#i',
        ]
    ],
    'mail' => [
        'transport' => [
            'type' => 'sendmail',
            'options' => [],
        ],
        'default_message_options' => [
            'encoding' => 'UTF-8',
        ],
    ],
];
