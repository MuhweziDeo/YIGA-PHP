<?php


$tasks = App::get('database')->selectAll('tasks');

require 'views/index.view.php';