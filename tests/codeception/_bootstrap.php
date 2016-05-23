<?php
// This is global bootstrap for autoloading

$rootPath = __DIR__.'/../..';

require($rootPath.'/vendor/autoload.php');
require($rootPath.'/src/config/env.php');

if (getenv('YII_ENV') !== 'test') {
    echo "Error: YII_ENV must be set to 'test'\n";
    exit;
}

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'test');

defined('YII_TEST_ENTRY_URL') or define('YII_TEST_ENTRY_URL', parse_url(\Codeception\Configuration::config()['config']['test_entry_url'], PHP_URL_PATH));
defined('YII_TEST_ENTRY_FILE') or define('YII_TEST_ENTRY_FILE', dirname(dirname(__DIR__)).'/web/index.php');

require_once($rootPath.'/vendor/yiisoft/yii2/Yii.php');

$_SERVER['SCRIPT_FILENAME'] = YII_TEST_ENTRY_FILE;
$_SERVER['SCRIPT_NAME'] = YII_TEST_ENTRY_URL;
$_SERVER['SERVER_NAME'] = parse_url(\Codeception\Configuration::config()['config']['test_entry_url'], PHP_URL_HOST);
$_SERVER['SERVER_PORT'] =  parse_url(\Codeception\Configuration::config()['config']['test_entry_url'], PHP_URL_PORT) ?: '80';

#var_dump($_SERVER);exit;

Yii::setAlias('@tests', dirname(__DIR__));

