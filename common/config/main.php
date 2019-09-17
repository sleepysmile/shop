<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'modules' => [
        'admin' => [
            'class' => mdm\admin\Module::class,
        ]
    ],
    'components' => [
        'cache' => [
            'class' => yii\caching\FileCache::class,
        ],
        'db' => [
            'class' => yii\db\Connection::class,
            'dsn' => env('DB_DSN'),
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD'),
            'tablePrefix' => env('DB_TABLE_PREFIX'),
            'charset' => env('DB_CHARSET', 'utf8'),
        ],
        'authManager' => [
            'class' => yii\rbac\PhpManager::class,
            'defaultRoles' => ['guest', 'user'],
        ],
        'user' => [
            'identityClass' => mdm\admin\models\User::class,
            'loginUrl' => ['admin/user/login'],
        ]
    ],
];
