<?php 

    $tasks = $database->selectAll('mytodos');

    require 'views/index.view.php'; 
