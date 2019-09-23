<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DetallesInforme $detallesInforme
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Detalles Informe'), ['action' => 'edit', $detallesInforme->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Detalles Informe'), ['action' => 'delete', $detallesInforme->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detallesInforme->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Detalles Informes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Detalles Informe'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Detalles Causas'), ['controller' => 'DetallesCausas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Detalles Causa'), ['controller' => 'DetallesCausas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Personas'), ['controller' => 'Personas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Persona'), ['controller' => 'Personas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="detallesInformes view large-9 medium-8 columns content">
    <h3><?= h($detallesInforme->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Detalles Causa') ?></th>
            <td><?= $detallesInforme->has('detalles_causa') ? $this->Html->link($detallesInforme->detalles_causa->id, ['controller' => 'DetallesCausas', 'action' => 'view', $detallesInforme->detalles_causa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Persona') ?></th>
            <td><?= $detallesInforme->has('persona') ? $this->Html->link($detallesInforme->persona->id, ['controller' => 'Personas', 'action' => 'view', $detallesInforme->persona->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($detallesInforme->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nro Nota Recibida') ?></th>
            <td><?= $this->Number->format($detallesInforme->nro_nota_recibida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Nota Recibida') ?></th>
            <td><?= h($detallesInforme->fecha_nota_recibida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Asignacion') ?></th>
            <td><?= h($detallesInforme->fecha_asignacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Inicio Informe') ?></th>
            <td><?= h($detallesInforme->fecha_inicio_informe) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Feha Entrega Informe') ?></th>
            <td><?= h($detallesInforme->feha_entrega_informe) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($detallesInforme->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($detallesInforme->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Nro Informe Entrega') ?></h4>
        <?= $this->Text->autoParagraph(h($detallesInforme->nro_informe_entrega)); ?>
    </div>
    <div class="row">
        <h4><?= __('Nro Nota Entrega') ?></h4>
        <?= $this->Text->autoParagraph(h($detallesInforme->nro_nota_entrega)); ?>
    </div>
    <div class="row">
        <h4><?= __('Categoria Informe') ?></h4>
        <?= $this->Text->autoParagraph(h($detallesInforme->categoria_informe)); ?>
    </div>
</div>
