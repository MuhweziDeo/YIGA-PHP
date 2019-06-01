<?php

require 'vendor/autoload.php';
require 'Task.php';

$database = require 'core/bootsrap.php';




$router = Router::load('routes.php');

require $router->direct(Request::uri());


// $router = new Router;

// require 'routes.php';
// $queryBuilder = new QueryBuilder($query);
// $tasks = $query->selectAll('tasks', 'Task');
// $tasks = getAllTasks($conn);
// $tasks = $stmt->fetchAll(PDO::FETCH_OBJ);


// include 'index.view.php';

