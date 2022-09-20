<?php

$router->get('', 'PageController@login');
$router->get('login', 'PageController@login');
$router->get('index', 'PageController@index');
$router->get('register-page', 'PageController@register');

$router->post('index', 'PageController@index');
