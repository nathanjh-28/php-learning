<?php

require 'Task.php';
require 'functions.php';

$pdo = connectToDb();
$tasks = fetchAllTasks($pdo);

//var_dump($tasks);

require 'index.view.php';