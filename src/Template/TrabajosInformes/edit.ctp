<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TrabajosInforme $trabajosInforme
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $trabajosInforme->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $trabajosInforme->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Trabajos Informes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Detalles Informes'), ['controller' => 'DetallesInformes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Detalles Informe'), ['controller' => 'DetallesInformes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipos Trabajos'), ['controller' => 'TiposTrabajos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipos Trabajo'), ['controller' => 'TiposTrabajos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="trabajosInformes form large-9 medium-8 columns content">
    <?= $this->Form->create($trabajosInforme) ?>
    <fieldset>
        <legend><?= __('Edit Trabajos Informe') ?></legend>
        <?php
            echo $this->Form->control('observacion');
            echo $this->Form->control('detalle_informe_id', ['options' => $detallesInformes]);
            echo $this->Form->control('tipo_trabajo_id', ['options' => $tiposTrabajos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
