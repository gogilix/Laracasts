<?php

return [

	'database' => [

		'name' => 'mytodo',

		'username' => 'root',

		'password' => 'root',

		'connection' => 'mysql:host=127.0.0.1',

		'option' => [

			PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
		]

	]

];