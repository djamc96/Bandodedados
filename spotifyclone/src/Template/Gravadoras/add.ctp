<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gravadora $gravadora
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Gravadoras'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="gravadoras form large-9 medium-8 columns content">
    <?= $this->Form->create($gravadora) ?>
    <fieldset>
        <legend><?= __('Add Gravadora') ?></legend>
        <?php
            echo $this->Form->control('nome_gravadora');
            echo $this->Form->control('valor');
            echo $this->Form->control('validade_contrato', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
