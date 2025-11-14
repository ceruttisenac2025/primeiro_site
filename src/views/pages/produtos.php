<?php $this->layout('layouts::default'); ?>

<?php $this->start('main_c') ?>

<!-- 
=================================================
LÓGICA PHP - LEITURA DE DADOS
=================================================
Este bloco PHP carrega e decodifica o arquivo JSON de produtos. 
A lógica original de validação de arquivo, decodificação e tratamento de erro foi mantida.
-->
<?php
$jsonFile = __DIR__ . '/../../data/produtos.json';

if (!file_exists($jsonFile)) {
    die("<p style='color:red; text-align:center;'>❌ Arquivo JSON não encontrado em: $jsonFile</p>");
}

$jsonData = file_get_contents($jsonFile);
$produto = json_decode($jsonData, true);

if ($produto === null) {
    die("<p style='color:red; text-align:center;'>❌ Erro ao decodificar JSON: " . json_last_error_msg() . "</p>");
}

if (empty($produto)) {
    die("<p style='color:orange; text-align:center;'>⚠️ Nenhum produto encontrado no JSON.</p>");
}
?>

<!-- 
=================================================
ESTILOS DE REFINAMENTO (CSS)
=================================================
Estilos customizados para o design moderno, aplicando sombras, cantos arredondados 
e um esquema de cores limpo.
-->
<style>
    /* 1. Estilo base para a página */
    body {
        font-family: 'Inter', system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif;
        background-color: #f7f9fc; /* Fundo suave */
    }

    /* 2. Estilo dos Cartões de Produto */
    .product-card-modern {
        border-radius: 1rem;
        border: none;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.05); /* Sombra mais sutil */
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
    }

    .product-card-modern:hover {
        transform: translateY(-5px); /* Efeito de elevação sutil */
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
    }

    /* Imagem do Produto no Card */
    .product-card-modern .card-img-top {
        height: 200px; /* Altura fixa para uniformidade */
        object-fit: cover; /* Garantir que a imagem cubra o espaço sem distorção */
        border-radius: 1rem 1rem 0 0;
    }
    
    /* 3. Estilo da Barra de Pesquisa */
    .search-bar-container {
        border-radius: 0.75rem;
        padding: 0.5rem;
        background-color: #ffffff;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .search-bar-container .form-control {
        border: none;
        border-radius: 0.5rem 0 0 0.5rem;
    }

    .btn-search {
        background-color: #007bff;
        border-color: #007bff;
        font-weight: 600;
        border-radius: 0 0.5rem 0.5rem 0;
        transition: background-color 0.3s;
    }

    .btn-search:hover {
        background-color: #0056b3;
        border-color: #004085;
    }

    /* 4. Estilo do Modal de Detalhes */
    .modal-content {
        border-radius: 1.5rem;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }
    .modal-header {
        border-bottom: none;
        background-color: #f7f9fc;
    }
    .modal-body .btn-buy-lg {
        background-color: #ffc107; /* Amarelo (warning) mais vibrante para CTA */
        border-color: #ffc107;
        color: #212529;
        font-weight: bold;
        transition: all 0.3s;
        border-radius: 0.75rem;
    }
    .modal-body .btn-buy-lg:hover {
        background-color: #e0a800;
        border-color: #c09100;
        transform: scale(1.02);
    }
</style>

<div class="container py-5">
    
    <!-- =============================
    SEÇÃO SUPERIOR E BARRA DE PESQUISA
    ============================= -->
    <header class="row justify-content-center mb-5">
        <div class="col-lg-8">
            <h1 class="text-center mb-1 fw-bold text-dark">Catálogo de Produtos</h1>
            <p class="lead text-center text-muted mb-4">Descubra as nossas soluções inovadoras e de alta qualidade.</p>
            
            <div class="search-bar-container">
                <form action="#" method="GET">
                    <div class="input-group input-group-lg">
                        <!-- Campo de Pesquisa: Estilo integrado -->
                        <input type="search" 
                               class="form-control" 
                               placeholder="Buscar por nome ou categoria..." 
                               aria-label="Pesquisar" 
                               name="q"
                               value="<?= $this->e($_GET['q'] ?? '') ?>">
                        <!-- Botão de Pesquisa: Estilo aprimorado -->
                        <button class="btn btn-search" type="submit">
                            <!-- Ícone Bootstrap mantido, mas sem a necessidade da classe 'bi' (assumindo Font Awesome ou similar) -->
                            🔍 Pesquisar 
                        </button>
                    </div>
                </form>
            </div>
            
        </div>
    </header>

    <!-- =============================
    LISTA DE PRODUTOS (GRID RESPONSIVO)
    ============================= -->
    <section class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

    <?php foreach($produto as $index => $item): ?>
        
        <!-- COLUNA DE PRODUTO -->
        <div class="col">
            <div class="card h-100 product-card-modern">
                <!-- Imagem do Produto: Altura Fixa -->
                <img src="<?= $this->asset($this->e($item['Imagem'])) ?>" 
                     class="card-img-top" 
                     alt="<?= $this->e($item['Nome']) ?>"
                     onerror="this.onerror=null; this.src='https://placehold.co/600x400/cccccc/333333?text=Imagem+N/A';"
                     loading="lazy">
                
                <div class="card-body d-flex flex-column">
                    <!-- Título -->
                    <h5 class="card-title fw-bold text-dark mb-2">
                        <?= $this->e($item['Nome'])?>
                    </h5>
                    <!-- Preço em destaque -->
                    <p class="card-text fw-bolder text-success fs-4 mt-auto mb-3">
                        R$ <?= number_format($item['Preco'], 2, ',','.')?>
                    </p>
                    
                    <!-- Botão CTA -->
                    <button type="button" 
                            class="btn btn-primary mt-auto rounded-pill" 
                            data-bs-toggle="modal" 
                            data-bs-target="#produtoModal<?= $index ?>">
                        Ver Detalhes
                    </button>
                </div>
            </div>
        </div>

        <!-- =============================
        MODAL DE DETALHES DO PRODUTO (UMA POR PRODUTO)
        ============================= -->
        <div class="modal fade" 
             id="produtoModal<?= $index ?>" 
             tabindex="-1" 
             aria-labelledby="produtoModalLabel<?= $index ?>" 
             aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold text-dark" id="produtoModalLabel<?= $index ?>">
                            Detalhes: <?= $this->e($item['Nome']) ?>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    
                    <div class="modal-body p-5">
                        <div class="row">
                            <!-- Imagem (Col-md-5: ajustado para layout assimétrico, que é mais dinâmico) -->
                            <div class="col-md-5 mb-4 mb-md-0">
                                <img src="<?= $this->asset($this->e($item['Imagem'])) ?>" 
                                     class="img-fluid rounded-4 shadow-sm" 
                                     alt="<?= $this->e($item['Nome']) ?>">
                            </div>
                            
                            <!-- Informações (Col-md-7) -->
                            <div class="col-md-7 d-flex flex-column">
                                <h2 class="fw-bolder text-primary mb-3">
                                    R$ <?= number_format($item['Preco'], 2, ',','.')?>
                                </h2>
                                
                                <p class="text-secondary mb-4 flex-grow-1">
                                    <?= $this->e($item['Descricao'] ?? 'Este produto é de alta qualidade e pronto para atender às suas necessidades. Descrição detalhada não disponível.') ?>
                                </p>
                                
                                <!-- Botão de Compra em Destaque -->
                                <button class="btn btn-buy-lg btn-lg w-100 mt-auto">
                                    🛒 Adicionar ao Carrinho
                                </button>
                            </div>
                        </div>

                        <!-- Comentários (Separados e formatados) -->
                        <div class="mt-5 pt-3 border-top">
                            <h4 class="fw-bold mb-3">Avaliações dos Clientes</h4>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="p-3 bg-light rounded-3">
                                        <p class="mb-1 fw-bold">João</p>
                                        <p class="mb-0 small text-muted">Produto excelente! Recomendo.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 bg-light rounded-3">
                                        <p class="mb-1 fw-bold">Maria</p>
                                        <p class="mb-0 small text-muted">Gostei muito da qualidade.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 bg-light rounded-3">
                                        <p class="mb-1 fw-bold">Carlos</p>
                                        <p class="mb-0 small text-muted">Bom custo-benefício. Chegou rápido.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary rounded-pill px-4" data-bs-dismiss="modal">Continuar Comprando</button>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
    </section>
</div>

<!-- 
=================================================
INCLUSÃO DE JS (MANTIDO)
=================================================
Necessário para o funcionamento dos Modais do Bootstrap.
-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<?php $this->stop(); ?>