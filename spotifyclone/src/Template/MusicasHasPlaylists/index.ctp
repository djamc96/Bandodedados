<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MusicasHasPlaylist[]|\Cake\Collection\CollectionInterface $musicasHasPlaylists
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Musicas Has Playlist'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Musicas'), ['controller' => 'Musicas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Musica'), ['controller' => 'Musicas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Playlists'), ['controller' => 'Playlists', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Playlist'), ['controller' => 'Playlists', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="musicasHasPlaylists index large-9 medium-8 columns content">
    <h3><?= __('Musicas Has Playlists') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('musicas_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('musicas_artistas_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('playlists_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($musicasHasPlaylists as $musicasHasPlaylist): ?>
            <tr>
                <td><?= $this->Number->format($musicasHasPlaylist->musicas_id) ?></td>
                <td><?= $musicasHasPlaylist->has('musica') ? $this->Html->link($musicasHasPlaylist->musica->id, ['controller' => 'Musicas', 'action' => 'view', $musicasHasPlaylist->musica->id]) : '' ?></td>
                <td><?= $musicasHasPlaylist->has('playlist') ? $this->Html->link($musicasHasPlaylist->playlist->idplaylists, ['controller' => 'Playlists', 'action' => 'view', $musicasHasPlaylist->playlist->idplaylists]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $musicasHasPlaylist->musicas_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $musicasHasPlaylist->musicas_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $musicasHasPlaylist->musicas_id], ['confirm' => __('Are you sure you want to delete # {0}?', $musicasHasPlaylist->musicas_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
