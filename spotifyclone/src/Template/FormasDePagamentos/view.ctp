<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FormasDePagamento $formasDePagamento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Formas De Pagamento'), ['action' => 'edit', $formasDePagamento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Formas De Pagamento'), ['action' => 'delete', $formasDePagamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $formasDePagamento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Formas De Pagamentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Formas De Pagamento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="formasDePagamentos view large-9 medium-8 columns content">
    <h3><?= h($formasDePagamento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($formasDePagamento->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($formasDePagamento->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Clientes') ?></h4>
        <?php if (!empty($formasDePagamento->clientes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Validade Do Pagamento') ?></th>
                <th scope="col"><?= __('Usuarios Id') ?></th>
                <th scope="col"><?= __('Formas De Pagamento Id') ?></th>
                <th scope="col"><?= __('Planos Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($formasDePagamento->clientes as $clientes): ?>
            <tr>
                <td><?= h($clientes->id) ?></td>
                <td><?= h($clientes->validade_do_pagamento) ?></td>
                <td><?= h($clientes->usuarios_id) ?></td>
                <td><?= h($clientes->formas_de_pagamento_id) ?></td>
                <td><?= h($clientes->planos_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Clientes', 'action' => 'view', $clientes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Clientes', 'action' => 'edit', $clientes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Clientes', 'action' => 'delete', $clientes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
