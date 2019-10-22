<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Playlist $playlist
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Playlists'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="playlists form large-9 medium-8 columns content">
    <?= $this->Form->create($playlist) ?>
    <fieldset>
        <legend><?= __('Add Playlist') ?></legend>
        <?php
            echo $this->Form->control('id');
            echo $this->Form->control('nome');
            echo $this->Form->control('n_musicas');
            echo $this->Form->control('publica_privada');
            echo $this->Form->control('duracao');
            echo $this->Form->control('usuarios_id_usuario');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
