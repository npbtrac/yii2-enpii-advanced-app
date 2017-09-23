<?php
/**
 * Created by PhpStorm.
 * Author: npbtrac@yahoo.com
 * Date time: 4/17/17 11:42 AM
 */

// Defining root namespace to the root folder of application
Yii::setAlias('root', dirname(dirname(__DIR__)));

// Defining common namespace
Yii::setAlias('common', dirname(dirname(__DIR__)) . '/common');

// Define upload namespace
Yii::setAlias('uploads', dirname(dirname(__DIR__)) . '/uploads');

// Namespaces for all application endpoints
Yii::setAlias('api', dirname(dirname(__DIR__)) . '/api');
Yii::setAlias('frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('console', dirname(dirname(__DIR__)) . '/console');

