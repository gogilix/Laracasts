<?php

$names = [
	'Milan',
	'Goran',
	'Jovana'
];

$greeting = 'Hello, World';

// Associative Array
// It consists of any number of key - value pairs

$person = [

	'age' => 31,
	'hair' => 'black',
	'career' => 'web developer'

];

// add item to associative array

$person['name'] = 'Jeffrey';

// print out variable value
// var_dump($person);

// stop further execution and print out something
// die(var_dump(somevariable));

// remove item from array

unset($person['age']);


// Array of tasks

$task = [

	'title' => 'Finish Homework',
	'due' => 'today',
	'assigned_to' => 'Jeffrey',
	'completed' => true

];

require 'index.view.php';