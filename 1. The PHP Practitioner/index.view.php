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

		<?php foreach ($task as $heading => $value) : ?>

			<li><?= ucwords($heading) ?> : <?= $value ?></li>

		<?php endforeach; ?>

		</ul>

		<!-- Ternary operator -->

		<ul>

			<li>

				<strong>Name: </strong> <?= $task['title']; ?>

			</li>

			<li>

				<strong>Due Date: </strong> <?= $task['due']; ?>

			</li>

			<li>

				<strong>Person Responsible: </strong> <?= $task['assigned_to']; ?>

			</li>

			<li>

				<strong>Status: </strong> <?= $task['completed'] ? 'Complete' : 'Incomplete'; ?>

			</li>


			<!-- Conditionals -->

			<li>

				<strong>Status: </strong>

				<?php

				if ($task['completed']) {

					echo '&#9989;';

				} else {

					echo 'Incompleted!';

				}

				?>

			</li>

			<!-- Conditional 2 -->

			<li>

				<strong>Status: </strong>

				<?php if ($task['completed']) : ?>

					<span class="icon">Great, it's completed &#9989;</span>

				<?php endif; ?>

			</li>

		</ul>

	</body>

</html>