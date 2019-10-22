<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FormasDePagamento[]|\Cake\Collection\CollectionInterface $formasDePagamentos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Formas De Pagamento'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="formasDePagamentos index large-9 medium-8 columns content">
    <h3><?= __('Formas De Pagamentos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($formasDePagamentos as $formasDePagamento): ?>
            <tr>
                <td><?= $this->Number->format($formasDePagamento->id) ?></td>
                <td><?= h($formasDePagamento->tipo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $formasDePagamento->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $formasDePagamento->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $formasDePagamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $formasDePagamento->id)]) ?>
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
