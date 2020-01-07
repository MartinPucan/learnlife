<?php 
declare(strict_types=1);

App::get('database')->insert('users', [
        'name' => $_POST['name']
]);

header('Location: /');
