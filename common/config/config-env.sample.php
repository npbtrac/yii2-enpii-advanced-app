<?php
/**
 * Created by PhpStorm.
 * Author: npbtrac@yahoo.com
 * Date time: 4/17/17 1:46 PM
 */

return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=127.0.0.1;dbname=db_name',
            'username' => 'root',
            'password' => 'mysql',
            'charset' => 'utf8',
            'tablePrefix' => 'prefix_'
        ],
    ],
];