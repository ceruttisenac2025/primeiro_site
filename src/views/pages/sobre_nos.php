<?php $this->layout('layouts::default'); ?>

<?php $this->start('main_c') ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">[Seu Logo]</a>
            <span class="navbar-text">
                Nossa História
            </span>
        </div>
    </nav>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="fw-bold mb-4 text-primary">Nossa Missão é Simples</h1>
                    <p class="lead mb-4">
                        Fundada em **[Ano]**, a **[Nome da Sua Empresa]** nasceu com o objetivo de **[Descreva brevemente o principal objetivo/missão]**. Acreditamos que **[Valor principal]** é o caminho para transformar o mercado.
                    </p>
                    <hr class="my-5">
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-body text-center">
                            <h5 class="card-title text-success">⭐ Nossa Visão</h5>
                            <p class="card-text">Ser a referência global em **[Seu Nicho]**, impulsionando a inovação e sustentabilidade em todas as nossas operações.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-body text-center">
                            <h5 class="card-title text-danger">🤝 Nossos Valores</h5>
                            <p class="card-text">Ética, Transparência, Inovação e Foco no Cliente. Estes pilares guiam cada decisão que tomamos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </section>

    

    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">&copy; 2025 [Nome da Sua Empresa]. Todos os direitos reservados.</p>
    </footer>

<?php $this->stop() ?>