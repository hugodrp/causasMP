<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DetallesComunicacione $detallesComunicacione
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Detalles Comunicaciones'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Personas'), ['controller' => 'Personas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Persona'), ['controller' => 'Personas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipos Comunicaciones'), ['controller' => 'TiposComunicaciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipos Comunicacione'), ['controller' => 'TiposComunicaciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipos Origenes'), ['controller' => 'TiposOrigenes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipos Origene'), ['controller' => 'TiposOrigenes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="detallesComunicaciones form large-9 medium-8 columns content">
    <?= $this->Form->create($detallesComunicacione) ?>
    <fieldset>
        <legend><?= __('Add Detalles Comunicacione') ?></legend>
        <?php
            echo $this->Form->control('informacion');
            echo $this->Form->control('fecha_registro');
            echo $this->Form->control('persona_id', ['options' => $personas]);
            echo $this->Form->control('tipo_comunicacion_id', ['options' => $tiposComunicaciones]);
            echo $this->Form->control('tipo_origen_id', ['options' => $tiposOrigenes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
