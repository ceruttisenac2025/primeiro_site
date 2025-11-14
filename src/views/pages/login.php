<?php $this->layout('layouts::default'); ?>

<?php $this->start('main_c') ?>

<!-- 
=================================================
ESTILOS DE REFINAMENTO (CSS)
=================================================
Este bloco define estilos personalizados para alcançar o visual moderno e profissional, 
refinando o Bootstrap com sombras mais suaves, foco na tipografia e centralização elegante.
-->
<style>
    /* 1. Fundo suave para criar contraste com o cartão de login */
    .bg-soft-gradient {
        background: linear-gradient(135deg, #f7f9fc 0%, #e0e7ee 100%);
    }

    /* 2. Estilo do Cartão: Sombra mais profunda e profissional e cantos mais arredondados */
    .card-login {
        max-width: 420px;
        width: 100%;
        border-radius: 1.25rem; /* Cantos bem definidos */
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1); /* Sombra profissional */
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .card-login:hover {
        transform: translateY(-2px); /* Efeito sutil ao passar o mouse */
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    /* 3. Estilo do Botão Principal (Call-to-Action) */
    .btn-primary-custom {
        background-color: #007bff; /* Cor primária */
        border: none;
        padding: 0.75rem 1.5rem;
        font-weight: 600;
        letter-spacing: 0.5px;
        border-radius: 0.75rem; /* Arredondamento elegante */
        transition: all 0.3s ease;
    }

    .btn-primary-custom:hover {
        background-color: #0056b3;
        box-shadow: 0 4px 10px rgba(0, 123, 255, 0.4);
    }

    /* 4. Inputs de Formulário: Garante que os inputs se destaquem levemente */
    .form-control:focus {
        border-color: #80bdff;
        box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25);
    }
</style>

<div class="container d-flex justify-content-center align-items-center min-vh-100 bg-soft-gradient">
    <!-- Cartão centralizado e estilizado -->
    <div class="card card-login p-5 bg-white">
        <!-- Título do Formulário -->
        <h3 class="text-center fw-bold mb-5 text-dark">Acesso à Plataforma</h3>
        
        <!-- 
        =================================================
        LÓGICA PHP DO FORMULÁRIO - INTACTA
        =================================================
        O action e method foram mantidos para garantir a funcionalidade do back-end.
        -->
        <form action="/login/auth" method="post">
            
            <!-- Campo Email -->
            <div class="mb-4">
                <label for="email" class="form-label text-muted">E-mail</label>
                <!-- Classes Bootstrap aplicadas, eliminando uk-input e uk-form-width-large -->
                <input type="email" class="form-control rounded-3" name="email" id="email" placeholder="nome.sobrenome@email.com" required>
            </div>

            <!-- Campo Senha -->
            <div class="mb-5">
                <label for="senha" class="form-label text-muted">Senha</label>
                <!-- Classes Bootstrap aplicadas, eliminando uk-input e uk-form-width-large -->
                <input type="password" class="form-control rounded-3" name="senha" id="senha" placeholder="••••••••" required>
            </div>

            <!-- Botão Enviar -->
            <div class="d-grid">
                <!-- Botão com estilo customizado moderno e padding aprimorado -->
                <button type="submit" class="btn btn-primary-custom">
                    <!-- Melhoria UX: Adicionar um ícone sutil se houver suporte a ícones -->
                    Entrar no Sistema
                </button>
            </div>

        </form>
        
        <!-- Opção de Ajuda ou Recuperação de Senha (UX) -->
        <div class="text-center mt-4">
             <a href="#" class="text-secondary text-decoration-none small">Esqueceu sua senha?</a>
        </div>
        
    </div>
</div>
<?php $this->stop() ?>

<!-- 
=================================================
ESTILOS EXTERNOS (Bloco mantido)
=================================================
Mantém a referência ao seu arquivo CSS externo 'login.css'.
-->
<?php $this->start('style'); ?>
<link href="<?= $this->asset('css/login.css'); ?>" rel="stylesheet">
<?php $this->stop(); ?>

<!-- 
=================================================
SCRIPTS (Bloco mantido e ajustado)
=================================================
A função Breno() foi mantida, mas 'alert()' foi substituído por 'console.log()'
para evitar quebras no ambiente.
-->
<?php $this->start('scripts'); ?>
<script>
    function Breno(){
        // Substituído alert() por console.log() para boas práticas de front-end.
        console.log('Olá mundo! A função foi chamada.');
    }
</script>
<?php $this->stop(); ?>