<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Playlist[]|\Cake\Collection\CollectionInterface $playlists
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Playlist'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="playlists index large-9 medium-8 columns content">
    <h3><?= __('Playlists') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('n_musicas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('publica_privada') ?></th>
                <th scope="col"><?= $this->Paginator->sort('duracao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuarios_id_usuario') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($playlists as $playlist): ?>
            <tr>
                <td><?= $this->Number->format($playlist->id) ?></td>
                <td><?= h($playlist->nome) ?></td>
                <td><?= $this->Number->format($playlist->n_musicas) ?></td>
                <td><?= $this->Number->format($playlist->publica_privada) ?></td>
                <td><?= h($playlist->duracao) ?></td>
                <td><?= $this->Number->format($playlist->usuarios_id_usuario) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $playlist->idplaylists]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $playlist->idplaylists]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $playlist->idplaylists], ['confirm' => __('Are you sure you want to delete # {0}?', $playlist->idplaylists)]) ?>
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
