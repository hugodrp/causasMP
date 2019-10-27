<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DetallesInforme $detallesInforme
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $detallesInforme->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $detallesInforme->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Detalles Informes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Detalles Causas'), ['controller' => 'DetallesCausas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Detalles Causa'), ['controller' => 'DetallesCausas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Personas'), ['controller' => 'Personas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Persona'), ['controller' => 'Personas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categorias Informes'), ['controller' => 'CategoriasInformes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Categorias Informe'), ['controller' => 'CategoriasInformes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="detallesInformes form large-9 medium-8 columns content">
    <?= $this->Form->create($detallesInforme) ?>
    <fieldset>
        <legend><?= __('Edit Detalles Informe') ?></legend>
        <?php
            echo $this->Form->control('nro_nota_recibida');
            echo $this->Form->control('fecha_nota_recibida');
            echo $this->Form->control('fecha_asignacion');
            echo $this->Form->control('fecha_inicio_informe');
            echo $this->Form->control('nro_informe_entrega');
            echo $this->Form->control('nro_nota_entrega');
            echo $this->Form->control('feha_entrega_informe');
            echo $this->Form->control('detalle_causa_id', ['options' => $detallesCausas]);
            echo $this->Form->control('persona_id', ['options' => $personas]);
            echo $this->Form->control('categoria_informe_id', ['options' => $categoriasInformes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
