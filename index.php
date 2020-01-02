<?php

	require 'functions.php';

	require 'database/Connection.php';

	require 'Task.php';

	// dd($task);

	$pdo = Connection::make();

	$tasks = fetchAllTasks($pdo);

	require 'views/index.view.php';	



?>
