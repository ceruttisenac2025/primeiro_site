<?php $this->layout('layouts::default'); ?>

<?php $this->start('main_c') ?>

<!-- 
=================================================
INÍCIO DO REFACTOR - Landing Page
=================================================
Este bloco <style> define estilos personalizados para refinar a estética 
do Bootstrap, aplicando sombras mais suaves, cantos arredondados (rounded-xl) 
e transições para um toque moderno e profissional.
-->
<style>
    /* Estilo para a fonte: utilizando a stack de fontes modernas do Bootstrap, mas garantindo legibilidade. */
    body {
        font-family: 'Inter', system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif;
        background-color: #f7f9fc; /* Fundo suave para contraste */
    }

    /* Estilo moderno para cartões e containers */
    .card-modern {
        border-radius: 1rem; /* Cantos mais arredondados */
        border: none;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); /* Sombra sutil e elevada */
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    /* Efeito de hover profissional para os produtos */
    .card-modern:hover {
        transform: translateY(-5px); /* Efeito de elevação sutil */
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
    }

    /* Estilização para a seção de herói */
    .hero-section {
        background: linear-gradient(135deg, #e0f7fa 0%, #ffffff 100%);
        border-bottom: 3px solid #007bff; /* Linha sutil para delimitar a seção */
        padding-top: 5rem;
        padding-bottom: 5rem;
        margin-bottom: 3rem;
        border-radius: 0 0 50% 50% / 0 0 10% 10%; /* Borda inferior curvada (modern effect) */
    }

    /* Cores de status mais neutras e harmoniosas */
    .text-success-strong { color: #1e7e34 !important; }
    .text-primary-accent { color: #007bff !important; }

    /* Estilo para o call-to-action (CTA) principal */
    .btn-primary-custom {
        background-color: #007bff;
        border-color: #007bff;
        font-weight: 600;
        transition: all 0.3s;
    }
    .btn-primary-custom:hover {
        background-color: #0056b3;
        border-color: #004085;
        transform: scale(1.03);
    }
</style>

<!-- ================================================================= -->
<!-- SEÇÃO PRINCIPAL (HERO) -->
<!-- Um título forte e uma introdução clara. -->
<!-- ================================================================= -->
<header class="container-fluid hero-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <!-- Título principal: Display-4 é grande, com margem inferior refinada. -->
                <h1 class="display-4 fw-bolder mb-3 text-primary-accent">Bem-Vindos à Plataforma Inovadora!</h1>
                <!-- Subtítulo: Descrição de impacto com cor neutra. -->
                <p class="lead mb-5 text-muted">Soluções de alta qualidade, inovação e dedicação total para o seu sucesso.</p>
            </div>
        </div>
    </div>
</header>

<main class="container py-3">

    <!-- ================================================================= -->
    <!-- SEÇÃO SOBRE A EMPRESA (APRESENTAÇÃO) -->
    <!-- Utiliza o card-modern com sombra sutil para destaque. -->
    <!-- ================================================================= -->
    <section class="row justify-content-center mb-5">
        <div class="col-lg-10">
            <div class="card card-modern p-4 bg-white">
                <div class="card-body text-center">
                    <!-- Título do Bloco com Iconografia (simulada por emoji) -->
                    <h2 class="card-title fw-bold mb-3 text-dark">
                        ✨ Sobre Nossa Dedicação
                    </h2>
                    <!-- Texto descritivo com espaçamento adequado -->
                    <p class="card-text fs-5 text-secondary">
                        Somos uma empresa focada em **transformar desafios em soluções**. Nossa missão é entregar inovações de alta qualidade que superam as expectativas de nossos clientes. 
                        Confira abaixo a seleção de nossos produtos em destaque!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================================================= -->
    <!-- SEÇÃO PRODUTOS EM DESTAQUE -->
    <!-- Título de seção e Grid Responsivo com cards aprimorados. -->
    <!-- ================================================================= -->
    <section class="mb-5">
        <h2 class="text-center fw-bold mb-5 text-dark">Produtos que Você Vai Amar</h2>

        <!-- Grid de Produtos: row-cols-md-3 garante 3 colunas em telas médias e grandes. g-4 aumenta o espaçamento. -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            
            <!-- PRODUTO 1: Cadeira Gamer -->
            <div class="col">
                <div class="card h-100 card-modern">
                    <!-- Lógica PHP: Mantida e protegida para carregar o asset -->
                    <img src="/<?= $this->asset("img/cadeira.webp") ?>" class="card-img-top img-fluid" alt="Cadeira Gamer ergonômica" style="border-radius: 1rem 1rem 0 0; max-height: 250px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <!-- Hierarquia de Texto: Título em destaque -->
                        <h5 class="card-title fw-bold mb-1 text-dark">Cadeira Gamer Ultra</h5>
                        <p class="card-text text-muted mb-3 flex-grow-1">Conforto máximo para longas sessões.</p>
                        
                        <!-- Preço e CTA -->
                        <div class="mt-auto">
                            <!-- Melhoria UX: Preço em cor de destaque (verde sucesso) e forte. -->
                            <p class="fw-bolder text-success-strong fs-4 mb-3">R$ 99,90</p>
                            <a href="#" class="btn btn-sm btn-outline-dark w-100 rounded-pill">Comprar Agora</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- PRODUTO 2: Mesa de Escritório -->
            <div class="col">
                <div class="card h-100 card-modern">
                    <!-- Lógica PHP: Mantida e protegida para carregar o asset -->
                    <img src="/<?= $this->asset("img/mesa.jpg") ?>" class="card-img-top img-fluid" alt="Mesa de Escritório moderna" style="border-radius: 1rem 1rem 0 0; max-height: 250px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold mb-1 text-dark">Mesa Executiva</h5>
                        <p class="card-text text-muted mb-3 flex-grow-1">Design minimalista e alta durabilidade.</p>

                        <div class="mt-auto">
                            <p class="fw-bolder text-success-strong fs-4 mb-3">R$ 149,99</p>
                            <a href="#" class="btn btn-sm btn-outline-dark w-100 rounded-pill">Comprar Agora</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- PRODUTO 3: Monitor -->
            <div class="col">
                <div class="card h-100 card-modern">
                    <!-- Lógica PHP: Mantida e protegida para carregar o asset -->
                    <img src="/<?= $this->asset("img/monitor.jpg") ?>" class="card-img-top img-fluid" alt="Monitor de alta definição" style="border-radius: 1rem 1rem 0 0; max-height: 250px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold mb-1 text-dark">Monitor Pro HD</h5>
                        <p class="card-text text-muted mb-3 flex-grow-1">Cores vibrantes e resolução cristalina.</p>
                        
                        <div class="mt-auto">
                            <p class="fw-bolder text-success-strong fs-4 mb-3">R$ 49,50</p>
                            <a href="#" class="btn btn-sm btn-outline-dark w-100 rounded-pill">Comprar Agora</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================================================= -->
    <!-- SEÇÃO CALL TO ACTION FINAL -->
    <!-- Botões principais centralizados e com espaçamento de topo. -->
    <!-- ================================================================= -->
    <section class="row justify-content-center pt-4 pb-5">
        <div class="col-lg-10 text-center">
            <h3 class="fw-normal mb-4 text-dark">Pronto para dar o próximo passo?</h3>
            <div class="d-grid gap-3 d-md-flex justify-content-center">
                <!-- CTA principal (destaque) -->
                <a href="/produtos" class="btn btn-primary-custom btn-lg px-5 py-3 rounded-pill">
                    Ver Catálogo Completo
                </a>
                <!-- CTA secundário (outline) -->
                <a href="/about" class="btn btn-outline-secondary btn-lg px-5 py-3 rounded-pill">
                    Fale Conosco
                </a>
            </div>
        </div>
    </section>
</main>

<!-- ================================================== -->
<!-- FIM DO REFACTOR -->
<!-- ================================================== -->
<?php $this->stop() ?>