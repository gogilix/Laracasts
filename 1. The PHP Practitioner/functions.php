<?php

// function to die and dump
function dd($data) { 			

	echo '<pre>';
	die(var_dump($data));
	echo '</pre>';
	
}