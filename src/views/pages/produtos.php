<?php $this->layout('layouts::default'); ?>
<?php $this->start('main_c'); ?>



<?php
$jsonFile = __DIR__ . '/../../data/produtos.json';

if (!file_exists($jsonFile)) {
    die("<p style='color:red'>❌ Arquivo JSON não encontrado em: $jsonFile</p>");
}

$jsonData = file_get_contents($jsonFile);
$produto = json_decode($jsonData, true);

if ($produto === null) {
    die("<p style='color:red'>❌ Erro ao decodificar JSON: " . json_last_error_msg() . "</p>");
}

if (empty($produto)) {
    die("<p style='color:orange'>⚠️ Nenhum produto encontrado no JSON.</p>");
}
?>




<div class="container py-5">

    <!-- =============================
         BARRA DE PESQUISA
         ============================= -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8">
            <h2 class="text-center mb-4 text-secondary">Pesquisar Produtos</h2>
            <form action="#" method="GET">
                <div class="input-group input-group-lg shadow-sm">
                    <input type="search" 
                           class="form-control" 
                           placeholder="Digite o nome do produto..." 
                           aria-label="Pesquisar" 
                           name="q"
                           value="<?= $this->e($_GET['q'] ?? '') ?>">
                    <button class="btn btn-primary" type="submit">
                        <i class="bi bi-search"></i> Pesquisar
                    </button>
                </div>
            </form>
            <small class="form-text text-muted mt-2 d-block text-center">
                Procure por nome ou categoria.
            </small>
        </div>
    </div>

    <!-- =============================
         LISTA DE PRODUTOS
         ============================= -->
    <div class="row g-4">

    <?php foreach($produto as $index => $item): ?>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="<?= $this->asset($this->e($item['Imagem'])) ?>" 
                     class="card-img-top" 
                     alt="<?= $this->e($item['Nome']) ?>">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title"><?= $this->e($item['Nome'])?></h5>
                    <p class="card-text fw-bold text-success fs-5">
                        R$ <?= number_format($item['Preco'], 2, ',','.')?>
                    </p>
                    <!-- Botão que abre o modal -->
                    <button type="button" 
                            class="btn btn-primary mt-auto" 
                            data-bs-toggle="modal" 
                            data-bs-target="#produtoModal<?= $index ?>">
                        Ver Detalhes
                    </button>
                </div>
            </div>
        </div>

        <!-- =============================
             MODAL DO PRODUTO
             ============================= -->
        <div class="modal fade" 
             id="produtoModal<?= $index ?>" 
             tabindex="-1" 
             aria-labelledby="produtoModalLabel<?= $index ?>" 
             aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="produtoModalLabel<?= $index ?>">
                            <?= $this->e($item['Nome']) ?>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <!-- Imagem -->
                            <div class="col-md-6">
                                <img src="<?= $this->asset($this->e($item['Imagem'])) ?>" 
                                     class="img-fluid rounded" 
                                     alt="<?= $this->e($item['Nome']) ?>">
                            </div>
                            <!-- Informações -->
                            <div class="col-md-6">
                                <h5 class="text-success">R$ <?= number_format($item['Preco'], 2, ',','.')?></h5>
                                <p><?= $this->e($item['Descricao'] ?? 'Descrição do produto não disponível.') ?></p>
                                <button class="btn btn-warning btn-lg w-100">
                                    <i class="bi bi-cart"></i> Comprar Agora
                                </button>
                            </div>
                        </div>

                        <!-- Comentários -->
                        <div class="mt-4">
                            <h6>Comentários</h6>
                            <ul class="list-group">
                                <li class="list-group-item">João: Produto excelente!</li>
                                <li class="list-group-item">Maria: Gostei muito da qualidade.</li>
                                <li class="list-group-item">Carlos: Bom custo-benefício.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<?php $this->stop(); ?>
