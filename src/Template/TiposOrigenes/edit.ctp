<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TiposOrigene $tiposOrigene
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tiposOrigene->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tiposOrigene->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tipos Origenes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tiposOrigenes form large-9 medium-8 columns content">
    <?= $this->Form->create($tiposOrigene) ?>
    <fieldset>
        <legend><?= __('Edit Tipos Origene') ?></legend>
        <?php
            echo $this->Form->control('tipo_origen');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
