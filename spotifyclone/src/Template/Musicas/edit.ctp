<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Musica $musica
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $musica->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $musica->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Musicas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Artistas'), ['controller' => 'Artistas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Artista'), ['controller' => 'Artistas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="musicas form large-9 medium-8 columns content">
    <?= $this->Form->create($musica) ?>
    <fieldset>
        <legend><?= __('Edit Musica') ?></legend>
        <?php
            echo $this->Form->control('nome_musica');
            echo $this->Form->control('genero');
            echo $this->Form->control('duracao');
            echo $this->Form->control('link');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
