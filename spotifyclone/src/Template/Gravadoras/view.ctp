<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gravadora $gravadora
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Gravadora'), ['action' => 'edit', $gravadora->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Gravadora'), ['action' => 'delete', $gravadora->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gravadora->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Gravadoras'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gravadora'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="gravadoras view large-9 medium-8 columns content">
    <h3><?= h($gravadora->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome Gravadora') ?></th>
            <td><?= h($gravadora->nome_gravadora) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($gravadora->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor') ?></th>
            <td><?= $this->Number->format($gravadora->valor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Validade Contrato') ?></th>
            <td><?= h($gravadora->validade_contrato) ?></td>
        </tr>
    </table>
</div>
