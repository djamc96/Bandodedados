<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Plano $plano
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Plano'), ['action' => 'edit', $plano->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Plano'), ['action' => 'delete', $plano->id], ['confirm' => __('Are you sure you want to delete # {0}?', $plano->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Planos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Plano'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="planos view large-9 medium-8 columns content">
    <h3><?= h($plano->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($plano->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($plano->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Preco') ?></th>
            <td><?= $this->Number->format($plano->preco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('N Musicas Por Mes') ?></th>
            <td><?= $this->Number->format($plano->n_musicas_por_mes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Validade Plano') ?></th>
            <td><?= h($plano->validade_plano) ?></td>
        </tr>
    </table>
</div>
