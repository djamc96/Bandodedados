<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Playlist $playlist
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Playlist'), ['action' => 'edit', $playlist->idplaylists]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Playlist'), ['action' => 'delete', $playlist->idplaylists], ['confirm' => __('Are you sure you want to delete # {0}?', $playlist->idplaylists)]) ?> </li>
        <li><?= $this->Html->link(__('List Playlists'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Playlist'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="playlists view large-9 medium-8 columns content">
    <h3><?= h($playlist->idplaylists) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($playlist->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($playlist->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('N Musicas') ?></th>
            <td><?= $this->Number->format($playlist->n_musicas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Publica Privada') ?></th>
            <td><?= $this->Number->format($playlist->publica_privada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuarios Id Usuario') ?></th>
            <td><?= $this->Number->format($playlist->usuarios_id_usuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Duracao') ?></th>
            <td><?= h($playlist->duracao) ?></td>
        </tr>
    </table>
</div>
