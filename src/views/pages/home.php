<?php $this->layout('layouts::default'); ?>

<?php $this->start('main_c') ?>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
            <h1 class="display-4 mb-3 text-primary">Olá Pessoas!</h1>
            <p class="lead mb-4">Sejam bem-vindos ao meu primeiro site!</p>

            <div class="card shadow-sm mb-5 bg-light border-0">
                <div class="card-body">
                    <h2 class="card-title text-success">Sobre a Empresa</h2>
                    <p class="card-text">Nós somos uma empresa dedicada a entregar soluções inovadoras e de alta qualidade para nossos clientes. Confira alguns de nossos destaques abaixo!</p>
                </div>
            </div>

            <h2 class="text-center mb-4 text-secondary">Nossos Produtos em Destaque</h2>
            
            <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
                
                <div class="col">
                    <div class="card h-100 shadow-lg border-0">
                        <img src="<?= $this->asset("img/personagem.webp") ?>" class="card-img-top img-fluid" alt="Produto 1">
                        <div class="card-body">
                            <h5 class="card-title text-danger mb-1">Nome do Produto 1</h5>
                            <p class="card-text fw-bold text-success fs-5">R$ 99,90</p>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card h-100 shadow-lg border-0">
                        <img src="<?= $this->asset("img/personagem.webp") ?>" class="card-img-top img-fluid" alt="Produto 2">
                        <div class="card-body">
                            <h5 class="card-title text-danger mb-1">Nome do Produto 2</h5>
                            <p class="card-text fw-bold text-success fs-5">R$ 149,99</p>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card h-100 shadow-lg border-0">
                        <img src="<?= $this->asset("img/personagem.webp") ?>" class="card-img-top img-fluid" alt="Produto 3">
                        <div class="card-body">
                            <h5 class="card-title text-danger mb-1">Nome do Produto 3</h5>
                            <p class="card-text fw-bold text-success fs-5">R$ 49,50</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-center mb-4">
                <a href="/produtos" class="btn btn-primary btn-lg px-4">Ver Mais Produtos</a>
                <a href="/about" class="btn btn-outline-secondary btn-lg px-4">Sobre nós</a>
            </div>
            
        </div>
    </div>
</div>
<?php $this->stop() ?>

<?php 