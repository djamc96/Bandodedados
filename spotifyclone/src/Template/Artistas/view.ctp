<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artista $artista
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Artista'), ['action' => 'edit', $artista->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Artista'), ['action' => 'delete', $artista->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artista->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Artistas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Artista'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Gravadoras'), ['controller' => 'Gravadoras', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gravadora'), ['controller' => 'Gravadoras', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="artistas view large-9 medium-8 columns content">
    <h3><?= h($artista->nome_gravadora) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome Artista') ?></th>
            <td><?= h($artista->nome_artista) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pais') ?></th>
            <td><?= h($artista->pais) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gravadora') ?></th>
            <td><?= $artista->has('gravadora') ? $this->Html->link($artista->gravadora->id, ['controller' => 'Gravadoras', 'action' => 'view', $artista->gravadora->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($artista->id) ?></td>
        </tr>
    </table>
</div>
