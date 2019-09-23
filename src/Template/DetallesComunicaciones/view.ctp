<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DetallesComunicacione $detallesComunicacione
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Detalles Comunicacione'), ['action' => 'edit', $detallesComunicacione->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Detalles Comunicacione'), ['action' => 'delete', $detallesComunicacione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detallesComunicacione->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Detalles Comunicaciones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Detalles Comunicacione'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Personas'), ['controller' => 'Personas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Persona'), ['controller' => 'Personas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tipos Comunicaciones'), ['controller' => 'TiposComunicaciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipos Comunicacione'), ['controller' => 'TiposComunicaciones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tipos Origenes'), ['controller' => 'TiposOrigenes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipos Origene'), ['controller' => 'TiposOrigenes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="detallesComunicaciones view large-9 medium-8 columns content">
    <h3><?= h($detallesComunicacione->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Informacion') ?></th>
            <td><?= h($detallesComunicacione->informacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Persona') ?></th>
            <td><?= $detallesComunicacione->has('persona') ? $this->Html->link($detallesComunicacione->persona->id, ['controller' => 'Personas', 'action' => 'view', $detallesComunicacione->persona->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipos Comunicacione') ?></th>
            <td><?= $detallesComunicacione->has('tipos_comunicacione') ? $this->Html->link($detallesComunicacione->tipos_comunicacione->id, ['controller' => 'TiposComunicaciones', 'action' => 'view', $detallesComunicacione->tipos_comunicacione->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipos Origene') ?></th>
            <td><?= $detallesComunicacione->has('tipos_origene') ? $this->Html->link($detallesComunicacione->tipos_origene->id, ['controller' => 'TiposOrigenes', 'action' => 'view', $detallesComunicacione->tipos_origene->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($detallesComunicacione->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Registro') ?></th>
            <td><?= h($detallesComunicacione->fecha_registro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($detallesComunicacione->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($detallesComunicacione->modified) ?></td>
        </tr>
    </table>
</div>
