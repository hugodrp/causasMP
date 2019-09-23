<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TrabajosInforme $trabajosInforme
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Trabajos Informe'), ['action' => 'edit', $trabajosInforme->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Trabajos Informe'), ['action' => 'delete', $trabajosInforme->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trabajosInforme->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Trabajos Informes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Trabajos Informe'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Detalles Informes'), ['controller' => 'DetallesInformes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Detalles Informe'), ['controller' => 'DetallesInformes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tipos Trabajos'), ['controller' => 'TiposTrabajos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipos Trabajo'), ['controller' => 'TiposTrabajos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="trabajosInformes view large-9 medium-8 columns content">
    <h3><?= h($trabajosInforme->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Detalles Informe') ?></th>
            <td><?= $trabajosInforme->has('detalles_informe') ? $this->Html->link($trabajosInforme->detalles_informe->id, ['controller' => 'DetallesInformes', 'action' => 'view', $trabajosInforme->detalles_informe->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipos Trabajo') ?></th>
            <td><?= $trabajosInforme->has('tipos_trabajo') ? $this->Html->link($trabajosInforme->tipos_trabajo->id, ['controller' => 'TiposTrabajos', 'action' => 'view', $trabajosInforme->tipos_trabajo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($trabajosInforme->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($trabajosInforme->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($trabajosInforme->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Observacion') ?></h4>
        <?= $this->Text->autoParagraph(h($trabajosInforme->observacion)); ?>
    </div>
</div>
