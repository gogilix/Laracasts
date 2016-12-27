<!DOCTYPE html>

<html lang="en">

	<meta charset = "UTF-8">

	<title>Document </title>

	<style>

		header {

			background: #e3e3e3;
			padding: 2em;
			text-align: center;
		}

	</style>

	<body>

		<header>

			<h1>
			<?php

				$name = htmlspecialchars($_GET['name']); 

				$greeting = 'Hello World';

				echo 'Hello ' . $name; 

			?>

			<?= "Hello again" ?>
			</h1>

		</header>

	</body>

</html>