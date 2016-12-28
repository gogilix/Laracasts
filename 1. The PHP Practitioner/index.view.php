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

	<ul>

		<?php foreach ($tasks as $task) : ?>

			<?php if ($task->completed) : ?>

				<strike>

			<?php endif; ?>

			<li><?= $task->description; ?></li>

			<?php if ($task->completed) : ?>

				</strike>

			<?php endif; ?>

		<?php endforeach; ?>

	</ul>
		
	</body>

</html>