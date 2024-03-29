<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Origene $origene
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Origenes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="origenes form large-9 medium-8 columns content">
    <?= $this->Form->create($origene) ?>
    <fieldset>
        <legend><?= __('Add Origene') ?></legend>
        <?php
            echo $this->Form->control('nro_origen');
            echo $this->Form->control('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
