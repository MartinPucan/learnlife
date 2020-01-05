<?php

    $router->get('', 'controllers/index.php');
    $router->get('articles', 'controllers/article.php');
    $router->get('english', 'controllers/en.php');
    $router->get('operating-system', 'controllers/os.php');
    $router->get('php', 'controllers/phpPage.php');
    $router->get('problems', 'controllers/problems.php');
    $router->post('names', 'controllers/add-name.php');
