<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Musica $musica
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Musica'), ['action' => 'edit', $musica->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Musica'), ['action' => 'delete', $musica->id], ['confirm' => __('Are you sure you want to delete # {0}?', $musica->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Musicas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Musica'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Artistas'), ['controller' => 'Artistas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Artista'), ['controller' => 'Artistas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="musicas view large-9 medium-8 columns content">
    <h3><?= h($musica->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome Musica') ?></th>
            <td><?= h($musica->nome_musica) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Genero') ?></th>
            <td><?= h($musica->genero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link') ?></th>
            <td><?= h($musica->link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Artista') ?></th>
            <td><?= $musica->has('artista') ? $this->Html->link($musica->artista->nome_gravadora, ['controller' => 'Artistas', 'action' => 'view', $musica->artista->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($musica->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Duracao') ?></th>
            <td><?= h($musica->duracao) ?></td>
        </tr>
    </table>
</div>
