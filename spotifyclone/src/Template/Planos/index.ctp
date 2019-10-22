<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Plano[]|\Cake\Collection\CollectionInterface $planos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Plano'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="planos index large-9 medium-8 columns content">
    <h3><?= __('Planos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('preco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('n_musicas_por_mes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('validade_plano') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($planos as $plano): ?>
            <tr>
                <td><?= $this->Number->format($plano->id) ?></td>
                <td><?= h($plano->nome) ?></td>
                <td><?= $this->Number->format($plano->preco) ?></td>
                <td><?= $this->Number->format($plano->n_musicas_por_mes) ?></td>
                <td><?= h($plano->validade_plano) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $plano->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $plano->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $plano->id], ['confirm' => __('Are you sure you want to delete # {0}?', $plano->id)]) ?>
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
