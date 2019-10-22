<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MusicasHasPlaylist $musicasHasPlaylist
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Musicas Has Playlist'), ['action' => 'edit', $musicasHasPlaylist->musicas_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Musicas Has Playlist'), ['action' => 'delete', $musicasHasPlaylist->musicas_id], ['confirm' => __('Are you sure you want to delete # {0}?', $musicasHasPlaylist->musicas_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Musicas Has Playlists'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Musicas Has Playlist'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Musicas'), ['controller' => 'Musicas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Musica'), ['controller' => 'Musicas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Playlists'), ['controller' => 'Playlists', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Playlist'), ['controller' => 'Playlists', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="musicasHasPlaylists view large-9 medium-8 columns content">
    <h3><?= h($musicasHasPlaylist->musicas_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Musica') ?></th>
            <td><?= $musicasHasPlaylist->has('musica') ? $this->Html->link($musicasHasPlaylist->musica->id, ['controller' => 'Musicas', 'action' => 'view', $musicasHasPlaylist->musica->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Playlist') ?></th>
            <td><?= $musicasHasPlaylist->has('playlist') ? $this->Html->link($musicasHasPlaylist->playlist->idplaylists, ['controller' => 'Playlists', 'action' => 'view', $musicasHasPlaylist->playlist->idplaylists]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Musicas Id') ?></th>
            <td><?= $this->Number->format($musicasHasPlaylist->musicas_id) ?></td>
        </tr>
    </table>
</div>
