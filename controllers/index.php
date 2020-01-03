<?php 

    $tasks = $app['database']->selectAll('mytodos');

    require 'views/index.view.php'; 
