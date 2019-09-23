<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DetallesComunicacione[]|\Cake\Collection\CollectionInterface $detallesComunicaciones
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Detalles Comunicacione'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Personas'), ['controller' => 'Personas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Persona'), ['controller' => 'Personas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipos Comunicaciones'), ['controller' => 'TiposComunicaciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipos Comunicacione'), ['controller' => 'TiposComunicaciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipos Origenes'), ['controller' => 'TiposOrigenes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipos Origene'), ['controller' => 'TiposOrigenes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="detallesComunicaciones index large-9 medium-8 columns content">
    <h3><?= __('Detalles Comunicaciones') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('informacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_registro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('persona_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_comunicacion_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_origen_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($detallesComunicaciones as $detallesComunicacione): ?>
            <tr>
                <td><?= $this->Number->format($detallesComunicacione->id) ?></td>
                <td><?= h($detallesComunicacione->informacion) ?></td>
                <td><?= h($detallesComunicacione->fecha_registro) ?></td>
                <td><?= h($detallesComunicacione->created) ?></td>
                <td><?= h($detallesComunicacione->modified) ?></td>
                <td><?= $detallesComunicacione->has('persona') ? $this->Html->link($detallesComunicacione->persona->id, ['controller' => 'Personas', 'action' => 'view', $detallesComunicacione->persona->id]) : '' ?></td>
                <td><?= $detallesComunicacione->has('tipos_comunicacione') ? $this->Html->link($detallesComunicacione->tipos_comunicacione->id, ['controller' => 'TiposComunicaciones', 'action' => 'view', $detallesComunicacione->tipos_comunicacione->id]) : '' ?></td>
                <td><?= $detallesComunicacione->has('tipos_origene') ? $this->Html->link($detallesComunicacione->tipos_origene->id, ['controller' => 'TiposOrigenes', 'action' => 'view', $detallesComunicacione->tipos_origene->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $detallesComunicacione->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $detallesComunicacione->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $detallesComunicacione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detallesComunicacione->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
