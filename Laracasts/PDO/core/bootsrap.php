<?php


App::bind('config', $config = require 'config.php');


App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

// $app = [];

// $app['config'] = require 'config.php';

// require 'core/Router.php';
// require 'core/Request.php';
// require 'core/database/Connection.php';
// require 'core/database/QueryBuilder.php';

// $app['database'] = new QueryBuilder(
//     Connection::make($app['config']['database'])
// );