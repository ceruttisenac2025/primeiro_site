<?php
$router->mount('', function() use($router) {
   $router->setNamespace('\Services');
   $router->get('/', 'PageServices@getHome');
});

$router->mount('/login', function() use($router){
   $router->setNamespace('\Services');
   $router->get('/', 'PageServices@getLogin');

   $router->post('/auth', 'PageServices@postAutentication');
});

$router->mount('/about', function() use($router){
   $router->get('/', 'PageServices@getAbout');
});

$router->mount('/produtos', function() use($router){
   $router->get('/', 'PageServices@getProdutos');
});