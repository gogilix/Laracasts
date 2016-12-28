<?php

require 'functions.php';
require 'Task.php';

$pdo = connectToDb();

$tasks = fetchAllTasks($pdo);

//dd($results[0]->description);

require 'index.view.php';