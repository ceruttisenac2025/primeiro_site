<?php
use Controller\TemplateRender;


$router->mount("", fn: function() use($router): void{
  $router->get("/", function():void{
  TemplateRender::run()->renderMake('pages::home', [
    "nome_usuario" => "Cerutti",
    "title" => "Pagina incial",
    //criar variavel aqui (acho)
    ]);
  });
});

