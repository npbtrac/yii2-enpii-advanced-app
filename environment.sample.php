<?php
/**
 * Created by PhpStorm.
 * Author: npbtrac@yahoo.com
 * Date time: 4/17/17 1:43 PM
 */

// Enable displaying all errors
error_reporting(E_ALL);
ini_set('display_errors', 'On');
ini_set('display_startup_errors', 'On');

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

defined('VENDOR_PATH') or define('VENDOR_PATH', '/path/to/vendor');

defined('APP_BASE_URL') or define('APP_BASE_URL', '/path/to/project');
defined('APP_BASE_PATH') or define('APP_BASE_PATH', dirname(__FILE__));