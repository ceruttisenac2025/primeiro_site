<?php $this->layout('layouts::default'); ?>

<?php $this->start('main_c') ?>
<h1 class="text-center mt-5">Olá <?= $this->e($nome_usuario) ?>!</h1>
<p>Sejam bem vindos ao meu primeiro site!</p>
<a href="/about">Sobre nós</a>
<img src="<?= $this->asset("img/personagem.webp") ?>" alt="Imagem">
<?php $this->stop() ?>

<?php $this->start('footer_c') ?>
<p>Breno.com</p>
<?php $this->stop() ?>