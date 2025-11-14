<?php $this->layout('layouts::default'); ?>

<?php $this->start('main_c') ?>

<style>
    /* 1. Estilo Base e Fundo */
    body {
        font-family: 'Inter', system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif;
        background-color: #f7f9fc; /* Fundo suave */
    }

    /* 2. Estilo do Navbar */
    .navbar-modern {
        background-color: #007bff !important; /* Cor primária forte */
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }
    
    .navbar-text-accent {
        color: #ffffff;
        font-weight: 500;
        letter-spacing: 0.5px;
    }

    /* 3. Hero Section - Destaque Visual */
    .hero-about {
        background: linear-gradient(180deg, #e3f2fd 0%, #f7f9fc 100%); /* Gradiente azul claro/branco */
        padding-top: 6rem;
        padding-bottom: 6rem;
    }
    
    .hero-about h1 {
        font-size: 2.8rem;
    }

    /* 4. Cartões de Missão, Visão, Valores (MVV) */
    .card-mvv {
        border-radius: 1rem;
        border: 1px solid rgba(0, 0, 0, 0.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05); /* Sombra mais suave */
        transition: transform 0.3s ease;
    }

    .card-mvv:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }
    
    .card-mvv .card-title {
        font-weight: bold;
        padding-bottom: 0.5rem;
        border-bottom: 2px solid; /* Linha de cor para o título */
        display: inline-block;
        margin-bottom: 1.5rem;
    }
    
    /* Cores de acento para os títulos dos cards */
    .text-mission { border-color: #198754; color: #198754 !important; } /* Verde/Success */
    .text-vision { border-color: #0d6efd; color: #0d6efd !important; } /* Azul/Primary */
    .text-values { border-color: #dc3545; color: #dc3545 !important; } /* Vermelho/Danger */

    /* 5. Footer Moderno */
    .footer-modern {
        background-color: #212529 !important; /* Quase preto */
    }
</style>

<!-- 
=================================================
NAVBAR
=================================================
Navbar aprimorado para um visual mais limpo e moderno, usando a cor primária.
-->
<nav class="navbar navbar-expand-lg navbar-modern">
    <div class="container py-2">
        <!-- Logo com destaque -->
        <a class="navbar-brand fw-bold fs-4" href="#">
            🚀 [Seu Logo]
        </a>
        <!-- Texto de navegação secundário -->
        <span class="navbar-text navbar-text-accent">
            Nossa História e Propósito
        </span>
    </div>
</nav>

<!-- 
=================================================
SEÇÃO PRINCIPAL: MISSÃO
=================================================
A Seção de Missão usa o estilo Hero para criar um impacto centralizado.
O bloco de <br> tags foi removido e substituído por padding e margens.
-->
<section class="hero-about">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto text-center">
                <!-- Título Forte -->
                <h1 class="fw-bolder mb-5 text-dark">
                    Nossa Missão é Simples: Foco na Inovação
                </h1>
                
                <!-- Parágrafo Principal -->
                <p class="lead mb-4 text-secondary">
                    Fundada em **[Ano]**, a **[Nome da Sua Empresa]** nasceu com o objetivo de **[Descreva brevemente o principal objetivo/missão]**. 
                    Nossa trajetória é marcada pela busca incessante por **inovação** e pela **dedicação total** em superar as expectativas dos nossos clientes.
                    Acreditamos que **[Valor principal]** é o caminho para transformar o mercado.
                </p>
                
                <!-- CTA para direcionar o usuário -->
                <div class="d-flex justify-content-center mt-5">
                    <a href="#" class="btn btn-outline-primary btn-lg rounded-pill px-5">Conheça Nossos Produtos</a>
                </div>
                
            </div>
        </div>
    </div>
</section>

<!-- 
=================================================
SEÇÃO SECUNDÁRIA: VISÃO E VALORES (MVV)
=================================================
Utiliza cards aprimorados e o grid do Bootstrap para responsividade.
-->
<section class="py-5">
    <div class="container">
        
        <h2 class="text-center fw-bold mb-5 text-dark">
            Pilares do Nosso Sucesso
        </h2>
        
        <div class="row justify-content-center g-4">
            
            <!-- CARD 1: VISÃO -->
            <!-- O card-title tem uma linha colorida (text-vision) para destaque -->
            <div class="col-md-6 col-lg-5 mb-4">
                <div class="card card-mvv h-100 p-3">
                    <div class="card-body text-center">
                        <h5 class="card-title text-vision">
                            ⭐ Nossa Visão
                        </h5>
                        <p class="card-text text-secondary fs-6">
                            Ser a referência global em **[Seu Nicho]**, impulsionando a inovação e sustentabilidade em todas as nossas operações, redefinindo o padrão de excelência no setor.
                        </p>
                    </div>
                </div>
            </div>

            <!-- CARD 2: VALORES -->
            <div class="col-md-6 col-lg-5 mb-4">
                <div class="card card-mvv h-100 p-3">
                    <div class="card-body text-center">
                        <h5 class="card-title text-values">
                            🤝 Nossos Valores
                        </h5>
                        <p class="card-text text-secondary fs-6">
                            **Ética, Transparência, Inovação e Foco no Cliente.** Estes quatro pilares inegociáveis guiam cada decisão que tomamos, garantindo relações de confiança duradouras.
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
</section>

<!-- 
=================================================
FOOTER
=================================================
Footer simples, mas com estilo moderno.
-->
<footer class="footer-modern text-white text-center py-4">
    <div class="container">
        <p class="mb-0 small">&copy; 2025 [Nome da Sua Empresa]. Todos os direitos reservados. | Desenvolvido com Paixão e Inovação.</p>
    </div>
</footer>

<?php $this->stop() ?>