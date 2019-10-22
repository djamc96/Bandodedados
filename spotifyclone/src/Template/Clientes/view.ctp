<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cliente'), ['action' => 'edit', $cliente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Formas De Pagamentos'), ['controller' => 'FormasDePagamentos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Formas De Pagamento'), ['controller' => 'FormasDePagamentos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Planos'), ['controller' => 'Planos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Plano'), ['controller' => 'Planos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clientes view large-9 medium-8 columns content">
    <h3><?= h($cliente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= $cliente->has('usuario') ? $this->Html->link($cliente->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $cliente->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Formas De Pagamento') ?></th>
            <td><?= $cliente->has('formas_de_pagamento') ? $this->Html->link($cliente->formas_de_pagamento->id, ['controller' => 'FormasDePagamentos', 'action' => 'view', $cliente->formas_de_pagamento->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Plano') ?></th>
            <td><?= $cliente->has('plano') ? $this->Html->link($cliente->plano->id, ['controller' => 'Planos', 'action' => 'view', $cliente->plano->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cliente->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Validade Do Pagamento') ?></th>
            <td><?= h($cliente->validade_do_pagamento) ?></td>
        </tr>
    </table>
</div>
