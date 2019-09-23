<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DetallesInforme $detallesInforme
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Detalles Informes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Detalles Causas'), ['controller' => 'DetallesCausas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Detalles Causa'), ['controller' => 'DetallesCausas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Personas'), ['controller' => 'Personas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Persona'), ['controller' => 'Personas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="detallesInformes form large-9 medium-8 columns content">
    <?= $this->Form->create($detallesInforme) ?>
    <fieldset>
        <legend><?= __('Add Detalles Informe') ?></legend>
        <?php
            echo $this->Form->control('nro_nota_recibida');
            echo $this->Form->control('fecha_nota_recibida');
            echo $this->Form->control('fecha_asignacion');
            echo $this->Form->control('fecha_inicio_informe');
            echo $this->Form->control('nro_informe_entrega');
            echo $this->Form->control('nro_nota_entrega');
            echo $this->Form->control('feha_entrega_informe');
            echo $this->Form->control('categoria_informe');
            echo $this->Form->control('detalle_causa_id', ['options' => $detallesCausas]);
            echo $this->Form->control('persona_id', ['options' => $personas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
