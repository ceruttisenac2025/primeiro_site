<?php
namespace Services;
use Controller\TemplateRender;

class PageServices {

    public function getHome(): void {
        TemplateRender::run()->renderMake('pages::home', [
            "title" => "Página Inicial",
            "nome_usuario" => "Breno"
        ]);
    }

    public function getLogin() {
        TemplateRender::run()->renderMake('pages::login');
    }

    public function getAbout() {
        TemplateRender::run()->renderMake('pages::sobre_nos');
    }

    public function getProdutos() {
        $produtos = [
            1 => [
                "id" => 1,
                "Nome" => "Produto 1",
                "Imagem" => "img/personagem.webp",
                "Preco" => 12.99,
                "Descricao" => "Descrição do Produto 1"
            ],
            2 => [
                "id" => 2,
                "Nome" => "Produto 2",
                "Imagem" => "img/personagem.webp",
                "Preco" => 1515.98,
                "Descricao" => "Descrição do Produto 2"
            ],
            3 => [
                "id" => 3,
                "Nome" => "Breno",
                "Imagem" => "img/breno.jpg",
                "Preco" => 5.98,
                "Descricao" => "Descrição do produto do Breno"
            ],
            4 => [
                "id" => 4,
                "Nome" => "Produto 4",
                "Imagem" => "img/personagem.webp",
                "Preco" => 15.00,
                "Descricao" => "Descrição do Produto 4"
            ]
        ];     
        TemplateRender::run()->renderMake('pages::produtos', [
            "produto" => $produtos
        ]);
    }

    public function getProduto($id) {
        $produtos = [
            1 => [
                "id" => 1,
                "Nome" => "Produto 1",
                "Imagem" => "img/personagem.webp",
                "Preco" => 12.99,
                "Descricao" => "Descrição do Produto 1"
            ],
            2 => [
                "id" => 2,
                "Nome" => "Produto 2",
                "Imagem" => "img/personagem.webp",
                "Preco" => 1515.98,
                "Descricao" => "Descrição do Produto 2"
            ],
            3 => [
                "id" => 3,
                "Nome" => "Breno",
                "Imagem" => "img/breno.jpg",
                "Preco" => 5.98,
                "Descricao" => "Descrição do produto do Breno"
            ],
            4 => [
                "id" => 4,
                "Nome" => "Produto 4",
                "Imagem" => "img/personagem.webp",
                "Preco" => 15.00,
                "Descricao" => "Descrição do Produto 4"
            ]
        ];

        if(!isset($produtos[$id])) {
            echo "Produto não encontrado!";
            return;
        }

        $comentarios = [
            ["usuario" => "João", "comentario" => "Gostei muito!"],
            ["usuario" => "Maria", "comentario" => "Produto excelente!"],
            ["usuario" => "Pedro", "comentario" => "Vale o preço."]
        ];

        TemplateRender::run()->renderMake('pages::produto', [
            "produto" => $produtos[$id],
            "comentarios" => $comentarios
        ]);
    }

    public function postAutentication() {
        echo var_dump($_POST);
    }
}
