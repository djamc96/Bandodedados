<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gravadora[]|\Cake\Collection\CollectionInterface $gravadoras
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Gravadora'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gravadoras index large-9 medium-8 columns content">
    <h3><?= __('Gravadoras') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_gravadora') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('validade_contrato') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gravadoras as $gravadora): ?>
            <tr>
                <td><?= $this->Number->format($gravadora->id) ?></td>
                <td><?= h($gravadora->nome_gravadora) ?></td>
                <td><?= $this->Number->format($gravadora->valor) ?></td>
                <td><?= h($gravadora->validade_contrato) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $gravadora->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gravadora->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gravadora->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gravadora->id)]) ?>
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
