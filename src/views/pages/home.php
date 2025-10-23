<?php $this->layout('layouts::default'); ?>

<?php $this->start('main_c'); ?>
<h1>Olá <?= $this->e($nome_usuario)?> !</h1>
<p>Sejam bem vindos ao meu primeiro site!</p>
<?php $this->stop(); ?>

<?php $this->start('footer_C'); ?>
<p>Cerutti.com</p>
<?php $this->stop(); ?>