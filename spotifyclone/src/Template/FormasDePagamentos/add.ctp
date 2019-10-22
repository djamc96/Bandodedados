<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FormasDePagamento $formasDePagamento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Formas De Pagamentos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="formasDePagamentos form large-9 medium-8 columns content">
    <?= $this->Form->create($formasDePagamento) ?>
    <fieldset>
        <legend><?= __('Add Formas De Pagamento') ?></legend>
        <?php
            echo $this->Form->control('tipo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
