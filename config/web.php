<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'suis',
    'name' => 'SUIS',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'es',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@mdm/admin'=>'@vendor/yii2-admin',
        '@mpdf'=>'@vendor/mpdf/src',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'asdasdasd',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authManager'=>[
            'class'=>'yii\rbac\DbManager',
            'itemTable'=>'seguridad.auth_item',
            'itemChildTable'=>'seguridad.auth_item_child',
            'assignmentTable'=>'seguridad.auth_assignment',
            'ruleTable'=>'seguridad.auth_rule',
        ],
        'user' => [
            //'identityClass' => 'app\models\User',
            'identityClass' => 'mdm\admin\models\User',
            //'loginUrl' => ['site/login'],
            //'enableAutoLogin' => true,
            'authTimeout' => 60*20,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        'db_saime' => require(__DIR__ . '/db_saime.php'),
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => true,
            'rules' => [
            ],
        ],
        'assetManager'=>[
            'bundles'=>[
                'yii\web\JqueryAsset' => [
                    'jsOptions'=>[
                        'position'=>\yii\web\View::POS_HEAD
                    ],
                ],
            ],
        ],
        'as access' => [
            'class'=>'mdm\admin\components\AccessControl',
            'allowActions' => [
                'site/error',
                'site/captcha',
            ],
        ],
        'i18n' => [
          'translations' => [
              '*' => [
                  'class' => 'yii\i18n\PhpMessageSource',
                  'basePath' => '@app/messages', // if advanced application, set @frontend/messages
                  'sourceLanguage' => 'en',
                  'fileMap' => [
                      //'main' => 'main.php',
                  ],
              ],
            ],
        ],
    ],
    'modules' => [
        'admin'=>[
            'class'=>'mdm\admin\Module',
            'layout' => 'left-menu',
        ],
        /*'gridview' =>  [
          'class' => '\kartik\grid\Module'
        ],*/
        'sicasmi' => [
            'class' => 'app\modules\sicasmi\SicasmiModule',
        ],

        'ev25' => [
            'class' => 'app\modules\ev25\EV25Module',
        ],

        'epi10' => [
            'class' => 'app\modules\epi10\Epi10Module',
        ],
        'pqn' => [
            'class' => 'app\modules\pqn\PqnModule',
        ],
        'mortalidad' => [
           'class' => 'app\modules\mortalidad\MortalidadModule',
        ],
        'org-sani' => [
            'class' => 'app\modules\organizacion_sanitaria\OrgSaniModule',
        ],
        'sala' => [
           'class' => 'app\modules\sala\sala',
       ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
        'generators' => [
            'modalCrud' => [
                'class' => 'app\templates\modal_crud\Generator',
                'templates' => [
                    'default' => '@app/templates/modal_crud/default',
                ]
            ],
            'model' => [
                'class' => 'app\templates\model\Generator',
            ],
        ],
    ];
}

return $config;
