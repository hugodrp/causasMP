<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $tiposTrabajo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tipos Trabajos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tiposTrabajos form large-9 medium-8 columns content">
    <?= $this->Form->create($tiposTrabajo) ?>
    <fieldset>
        <legend><?= __('Add Tipos Trabajo') ?></legend>
        <?php
            echo $this->Form->control('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
