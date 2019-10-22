<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MusicasHasPlaylist $musicasHasPlaylist
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Musicas Has Playlists'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Musicas'), ['controller' => 'Musicas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Musica'), ['controller' => 'Musicas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Playlists'), ['controller' => 'Playlists', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Playlist'), ['controller' => 'Playlists', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="musicasHasPlaylists form large-9 medium-8 columns content">
    <?= $this->Form->create($musicasHasPlaylist) ?>
    <fieldset>
        <legend><?= __('Add Musicas Has Playlist') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
