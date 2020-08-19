<?php
declare(strict_types=1);

use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Routing\Router;

$findRoot = function ($root) {
    do {
        $lastRoot = $root;
        $root = dirname($root);
        if (is_dir($root . '/vendor/cakephp/cakephp')) {
            return $root;
        }
    } while ($root !== $lastRoot);
    throw new Exception('Cannot find the root of the application, unable to run tests');
};
$root = $findRoot(__FILE__);
unset($findRoot);
chdir($root);

require_once 'vendor/cakephp/cakephp/src/basics.php';
require_once 'vendor/autoload.php';

if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}
define('PROJECT', $root . DS);
define('CORE_PATH', $root . DS . 'vendor' . DS . 'cakephp' . DS . 'cakephp' . DS);
define('ROOT', $root . DS . 'tests' . DS . 'test_app');
define('APP_DIR', 'App');
define('APP', ROOT . DS . 'App' . DS);
define('TMP', sys_get_temp_dir() . DS);
define('CACHE', sys_get_temp_dir() . DS . 'cache' . DS);
if (!defined('CONFIG')) {
    define('CONFIG', ROOT . DS . 'config' . DS);
}
Configure::write('debug', true);
Configure::write('App', [
    'namespace' => 'TestApp',
    'encoding' => 'UTF-8',
    'paths' => [
        'plugins' => [ROOT . DS . 'Plugin' . DS],
        'templates' => [ROOT . DS . 'App' . DS . 'Template' . DS],
    ],
]);

Cake\Cache\Cache::setConfig([
    '_cake_core_' => [
        'engine' => 'File',
        'prefix' => 'cake_core_',
        'serialize' => true,
    ],
    '_cake_model_' => [
        'engine' => 'File',
        'prefix' => 'cake_model_',
        'serialize' => true,
        'path' => TMP,
    ],
]);

// Store initial state
Router::reload();

putenv('db_dsn=sqlite://127.0.0.1/sakila_test');
putenv('DB=sqlite');
ConnectionManager::setConfig('default', ['url' => getenv('db_dsn')]);
ConnectionManager::setConfig('test', ['url' => getenv('db_dsn')]);

Plugin::getCollection()->add(new \Migrations\Plugin());