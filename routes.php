<?php

    $router->get('', 'PagesController@home');
    $router->get('blog', 'PagesController@blog');
    $router->get('english', 'controllers/en.php');
    $router->post('names', 'controllers/add-name.php');
    $router->get('php', 'PagesController@php');
    $router->get('problems', 'PagesController@problems');
    $router->get('operating-system', 'PagesController@os');
