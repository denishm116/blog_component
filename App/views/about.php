<?php $this->layout('layout', ['title' => 'User Profile']) ?>
<?= flash()->display(); ?>
<h1>Эбаут</h1>
<p>Hello, <?= $this->e($title) ?></p>