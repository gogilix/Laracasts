<?php

// function to die and dump
function dd($data) { 			

	echo '<pre>';
	die(var_dump($data));
	echo '</pre>';
	
}


// connect to database
function connectToDb() {

	try {
		return $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo','root','root');
	} catch (PDOException $e) {
		die($e->getMessage());
	}

}

// fetch all tasks
function fetchAllTasks($pdo) {

	$statement = $pdo->prepare('select * from todos');
	$statement->execute();
	return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

}