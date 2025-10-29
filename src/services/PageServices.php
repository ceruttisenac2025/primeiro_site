<?php
namespace Services;
use Controller\TemplateRender;
class PageServices{
    public function getHome(): void{
        TemplateRender::run()->renderMake('pages::home', [
         "title" => "Página Inicial",
         "nome_usuario" => "Breno"
      ]);
    }

    public function getLogin(){
        TemplateRender::run()->renderMake('pages::login');
    }

    public function getAbout(){
        TemplateRender::run()->renderMake('pages::sobre_nos');
    }

    public function getProdutos(){
        $produtos = [
            [
                "Nome" => "Produto 1",
                "Imagem" => "img/personagem.webp",
                "Preco" => 12.99
            ],
            [
                "Nome" => "Produto 2",
                "Imagem" => "img/personagem.webp",
                "Preco" => 1515.98
            ]
        ];
        TemplateRender::run()->renderMake('pages::produtos', [
            "produto" => $produtos
        ]);
    }

    public function postAutentication(){
        echo var_dump($_POST);
    }
}