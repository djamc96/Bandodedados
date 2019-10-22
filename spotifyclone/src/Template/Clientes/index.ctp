<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente[]|\Cake\Collection\CollectionInterface $clientes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Formas De Pagamentos'), ['controller' => 'FormasDePagamentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Formas De Pagamento'), ['controller' => 'FormasDePagamentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Planos'), ['controller' => 'Planos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Plano'), ['controller' => 'Planos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clientes index large-9 medium-8 columns content">
    <h3><?= __('Clientes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('validade_do_pagamento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuarios_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('formas_de_pagamento_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('planos_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?= $this->Number->format($cliente->id) ?></td>
                <td><?= h($cliente->validade_do_pagamento) ?></td>
                <td><?= $cliente->has('usuario') ? $this->Html->link($cliente->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $cliente->usuario->id]) : '' ?></td>
                <td><?= $cliente->has('formas_de_pagamento') ? $this->Html->link($cliente->formas_de_pagamento->id, ['controller' => 'FormasDePagamentos', 'action' => 'view', $cliente->formas_de_pagamento->id]) : '' ?></td>
                <td><?= $cliente->has('plano') ? $this->Html->link($cliente->plano->id, ['controller' => 'Planos', 'action' => 'view', $cliente->plano->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cliente->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cliente->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?>
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
