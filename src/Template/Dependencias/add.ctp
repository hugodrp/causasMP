<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dependencia $dependencia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Dependencias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Detalles Causas'), ['controller' => 'DetallesCausas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Detalles Causa'), ['controller' => 'DetallesCausas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dependencias form large-9 medium-8 columns content">
    <?= $this->Form->create($dependencia) ?>
    <fieldset>
        <legend><?= __('Add Dependencia') ?></legend>
        <?php
            echo $this->Form->control('nro_dependencia');
            echo $this->Form->control('descripcion');
            echo $this->Form->control('abreviacion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
