<?php

	require 'functions.php';

	$query = require 'bootstrap.php';

	$tasks = $query->selectAll('mytodos');

	require 'views/index.view.php';	

?>
