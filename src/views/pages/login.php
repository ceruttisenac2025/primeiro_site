<?php $this->layout('layouts::default'); ?>

<?php $this->start('main_c') ?>
<div class="container d-flex justify-content-center align-items-center min-vh-100 bg-light">
  <div class="card shadow-lg border-0 rounded-4 p-4" style="max-width: 400px; width: 100%;">
    <h3 class="text-center mb-4 uk-text-bold">Acesso ao Sistema</h3>
    <form action="/login/auth" method="post" class="uk-form-stacked">
  <!-- Campo Email -->
  <div class="mb-3 uk-margin">
    <label for="email" class="form-label uk-form-label">E-mail</label>
    <div class="uk-form-controls">
      <input type="email" class="form-control uk-input uk-form-width-large" name="email" id="email" placeholder="Digite seu e-mail" required>
    </div>
  </div>

  <!-- Campo Senha -->
  <div class="mb-3 uk-margin">
    <label for="senha" class="form-label uk-form-label">Senha</label>
    <div class="uk-form-controls">
      <input type="password" class="form-control uk-input uk-form-width-large" name="senha" id="senha" placeholder="Digite sua senha" required>
    </div>
  </div>

  <!-- Botão Enviar -->
  <div class="d-grid">
    <button type="submit" class="btn btn-primary uk-button uk-button-primary uk-border-rounded">Entrar</button>
  </div>

</form>
  </div>
</div>
<?php $this->stop() ?>

<?php $this->start('style'); ?>
<link href="<?= $this->asset('css/login.css'); ?>" rel="stylesheet">
<?php $this->stop(); ?>

<?php $this->start('scripts'); ?>
<script>
    function Breno(){
        alert('Olá mundo!');
    }
</script>
<?php $this->stop(); ?>