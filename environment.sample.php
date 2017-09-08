<?php
/**
 * Created by PhpStorm.
 * Author: npbtrac@yahoo.com
 * Date time: 4/17/17 1:43 PM
 */

// Define Base path, should not change this
defined('APP_BASE_PATH') or define('APP_BASE_PATH', dirname(__FILE__));

// Enable displaying all errors, you may set to 0 in production environment
error_reporting(E_ALL);

// Setting to display errors, turn it off on production mode
ini_set('display_errors', 'On');
ini_set('display_startup_errors', 'On');

// Set debug mode for Yii, turn off on production mode
defined('YII_DEBUG') or define('YII_DEBUG', true);

// Set development environment. It should be dev (on local or development host), test, staging, prod
defined('YII_ENV') or define('YII_ENV', 'dev');

// Path to vendor library
defined('VENDOR_PATH') or define('VENDOR_PATH', '/path/to/vendor');

// Path to Base url (without domain), for example, https://abc.com/xyz -> "/xyz", https://abc.com/ -> "" (empty)
defined('APP_BASE_URL') or define('APP_BASE_URL', '/path/to/project');

// Add more global constant after this line