<?php
declare(strict_types=1);

require 'functions.php';

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(

    Connection::make(App::get('config')['database'])

));

function view(string $name): int
{
    return require "views/{$name}.view.php";
}

function viewData(string $name, array $data): int
{
    extract($data);

    return require "views/{$name}.view.php";
}
