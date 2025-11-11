<?php $this->layout('layouts::default'); ?>

<?php $this->start('main_c'); ?>

<div class="container py-5">
    
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8">
            <h2 class="text-center mb-4 text-secondary">Pesquisar Produtos</h2>
            <form action="#" method="GET">
                <div class="input-group input-group-lg shadow-sm">
                    <input type="search" class="form-control" placeholder="Digite o nome do produto..." aria-label="Pesquisar" name="q">
                    <button class="btn btn-primary" type="submit">
                        <i class="bi bi-search"></i> Pesquisar
                    </button>
                </div>
            </form>
            <small class="form-text text-muted mt-2 d-block text-center">Procure por nome ou categoria.</small>
        </div>
    </div>
    
    <h2 class="text-center mb-4 text-primary">Todos os Produtos</h2>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">

    <?php foreach($produto as $item): ?>
        
        <div class="col"> 
            <div class="card h-100 shadow-sm border-0">
                <img src="<?= $this->asset($this->e($item['Imagem'])) ?>" class="card-img-top img-fluid" alt="<?= $this->e($item['Nome']) ?>">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title text-truncate"><?= $this->e($item['Nome']) ?></h5>
                    <p class="card-text fw-bold text-success fs-5">R$ <?= number_format($item['Preco'], 2, ',', '.') ?></p>
                    <a href="#" class="btn btn-primary mt-auto">Comprar</a>
                </div>
            </div>
        </div>

    <?php endforeach; ?>

    </div>
</div>

<?php $this->stop(); ?>