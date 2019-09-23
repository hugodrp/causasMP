<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Persona $persona
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $persona->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $persona->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Personas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Detalles Comunicaciones'), ['controller' => 'DetallesComunicaciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Detalles Comunicacione'), ['controller' => 'DetallesComunicaciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Detalles Informes'), ['controller' => 'DetallesInformes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Detalles Informe'), ['controller' => 'DetallesInformes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="personas form large-9 medium-8 columns content">
    <?= $this->Form->create($persona) ?>
    <fieldset>
        <legend><?= __('Edit Persona') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('apellido');
            echo $this->Form->control('cic');
            echo $this->Form->control('funcionario');
            echo $this->Form->control('fiscal');
            echo $this->Form->control('fecha_nacimiento');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
