<?php


$query = require 'bootstrap.php';
$tasks = $query->selectAll('todos');


var_dump($tasks);
//require 'index.view.php';