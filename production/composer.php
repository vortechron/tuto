<?php 

require __DIR__ ."/vendor/autoload.php";

use Illuminate\Database\Capsule\Manager as Database;

$db = new Database;

$db->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'sales',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Set the event dispatcher used by Eloquent models... (optional)
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
$db->setEventDispatcher(new Dispatcher(new Container));

// Make this Capsule instance available globally via static methods... (optional)
$db->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$db->bootEloquent();

