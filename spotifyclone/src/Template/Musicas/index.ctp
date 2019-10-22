<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Musica[]|\Cake\Collection\CollectionInterface $musicas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Musica'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Artistas'), ['controller' => 'Artistas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Artista'), ['controller' => 'Artistas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="musicas index large-9 medium-8 columns content">
    <h3><?= __('Musicas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_musica') ?></th>
                <th scope="col"><?= $this->Paginator->sort('genero') ?></th>
                <th scope="col"><?= $this->Paginator->sort('duracao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('link') ?></th>
                <th scope="col"><?= $this->Paginator->sort('artistas_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($musicas as $musica): ?>
            <tr>
                <td><?= $this->Number->format($musica->id) ?></td>
                <td><?= h($musica->nome_musica) ?></td>
                <td><?= h($musica->genero) ?></td>
                <td><?= h($musica->duracao) ?></td>
                <td><?= h($musica->link) ?></td>
                <td><?= $musica->has('artista') ? $this->Html->link($musica->artista->nome_gravadora, ['controller' => 'Artistas', 'action' => 'view', $musica->artista->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $musica->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $musica->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $musica->id], ['confirm' => __('Are you sure you want to delete # {0}?', $musica->id)]) ?>
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
