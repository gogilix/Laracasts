<!DOCTYPE html>

<html lang="en">

	<meta charset = "UTF-8">

	<title>Laracast - The PHP Practicioner </title>

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
			<?= $greeting; ?>
			</h1>

		</header>

		<ul>

		<?php foreach ($names as $name) : ?>

			<li><?= $name ?></li>

		<?php endforeach; ?>

		</ul>

		<ul>

		<?php foreach ($person as $feature => $value) : ?>

			<li><?= $feature ?> is <?= $value ?></li>

		<?php endforeach; ?>

		</ul>

		<ul>

		<li>
			<strong>Name: </strong> <?= task['title']
		</li>



		</ul>


	</body>

</html>