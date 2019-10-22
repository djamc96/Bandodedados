<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Plano $plano
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $plano->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $plano->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Planos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="planos form large-9 medium-8 columns content">
    <?= $this->Form->create($plano) ?>
    <fieldset>
        <legend><?= __('Edit Plano') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('preco');
            echo $this->Form->control('n_musicas_por_mes');
            echo $this->Form->control('validade_plano', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
