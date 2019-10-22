<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artista $artista
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $artista->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $artista->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Artistas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Gravadoras'), ['controller' => 'Gravadoras', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gravadora'), ['controller' => 'Gravadoras', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="artistas form large-9 medium-8 columns content">
    <?= $this->Form->create($artista) ?>
    <fieldset>
        <legend><?= __('Edit Artista') ?></legend>
        <?php
            echo $this->Form->control('nome_artista');
            echo $this->Form->control('pais');
            echo $this->Form->control('gravadoras_id', ['options' => $gravadoras]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
