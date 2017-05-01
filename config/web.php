<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'modules' => [
        'sweet' => [
            'class' => 'app\flame\sweet\Sweet',
        //     'controllerMap' => [  
        //         'assignment' => [  
        //             'class' => 'mdm\admin\controllers\AssignmentController',  
        //             'userClassName' => 'app\models\User',  
        //             'idField' => 'id'  
        //         ]  
        //     ],  
        //     'menus' => [  
        //         'assignment' => [  
        //             'label' => 'Grand Access' // change label  
        //         ],  
        //         //'route' => null, // disable menu route  
        //     ]  
        ],
        'api' =>[
            'class' => 'app\flame\api\api',
        ],
        'home' =>[
            'class' => 'app\flame\web\web',
        ],
    ],
    'defaultRoute'=>'home/start',  //设置默认主页
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'hulai',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
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
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
        'urlManager' => [ 
            //用于表明urlManager是否启用URL美化功能，在Yii1.1中称为path格式URL， 
            // Yii2.0中改称美化。 
            // 默认不启用。但实际使用中，特别是产品环境，一般都会启用。 
            'enablePrettyUrl' => true, 
            // 是否启用严格解析，如启用严格解析，要求当前请求应至少匹配1个路由规则， 
            // 否则认为是无效路由。 
            // 这个选项仅在 enablePrettyUrl 启用后才有效。 
            'enableStrictParsing' => false, 
            // 是否在URL中显示入口脚本。是对美化功能的进一步补充。 
            'showScriptName' => false, 
            // 指定续接在URL后面的一个后缀，如 .html 之类的。仅在 enablePrettyUrl 启用时有效。 
            'suffix' => '', 
            'rules' => [ 
                "<controller:\w+>/<id:\d+>"=>"<controller>/view", 
                "<controller:\w+>/<action:\w+>"=>"<controller>/<action>" 
            ],
        ],
        //权限管理配置  权限管理表在vendor\yiisoft\yii2\rbac\migrations
        'authManager' => [
            'class' => 'yii\rbac\DbManager',//认证类名称
            'itemTable' => 'auth_item',//认证项表名称
            'assignmentTable' => 'auth_assignment',//认证项赋权关系
            'itemChildTable' => 'auth_item_child',//认证项父子关系
            'defaultRoles'=>array('guest'),//默认角色
        ],
        // 'i18n' => [  
        //     'translations' => [  
        //         '*' => [  
        //             'class' => 'yii\i18n\PhpMessageSource',  
        //             'basePath' => '@app/messages', // if advanced application, set @frontend/messages  
        //             'sourceLanguage' => 'en',  
        //             'fileMap' => [  
        //                 //'main' => 'main.php',  
        //             ],  
        //         ],  
        //     ],  
        // ],  
    ],
    //添加双语
    'language' => isset(\Yii::$app->session['language'])?\Yii::$app->session['language']:'zh-CN',
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
