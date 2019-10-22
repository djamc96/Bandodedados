<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artista[]|\Cake\Collection\CollectionInterface $artistas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Artista'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Gravadoras'), ['controller' => 'Gravadoras', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gravadora'), ['controller' => 'Gravadoras', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="artistas index large-9 medium-8 columns content">
    <h3><?= __('Artistas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_artista') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pais') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gravadoras_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($artistas as $artista): ?>
            <tr>
                <td><?= $this->Number->format($artista->id) ?></td>
                <td><?= h($artista->nome_artista) ?></td>
                <td><?= h($artista->pais) ?></td>
                <td><?= $artista->has('gravadora') ? $this->Html->link($artista->gravadora->id, ['controller' => 'Gravadoras', 'action' => 'view', $artista->gravadora->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $artista->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $artista->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $artista->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artista->id)]) ?>
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
