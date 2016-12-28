<?php

require 'functions.php';

// ToDo Application

// ToDo, Comment, User, Task, ... 


class Task {

	protected $description;
	protected $completed = false;

	public function __construct($description) {

		// Automatically triggered on instantiation
		$this->description = $description;
	}



	public function isComplete() {
		return $this->completed;
	}

	public function complete() {
		$this->completed = true;
	}

	public function description() {
		return $this->description;
	}

}

/*
dd($tasks);

$task = new Task('Go to the store');
$task->complete();
var_dump($task->isComplete());
dd($task);
*/

$tasks = [
	
	new Task('Go to the store'),

	new Task('Finish my screencast'),

	new Task('Clean my room')
];

$tasks[0]->complete();


require 'index.view.php';