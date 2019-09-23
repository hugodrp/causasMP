<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DetallesInforme[]|\Cake\Collection\CollectionInterface $detallesInformes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Detalles Informe'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Detalles Causas'), ['controller' => 'DetallesCausas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Detalles Causa'), ['controller' => 'DetallesCausas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Personas'), ['controller' => 'Personas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Persona'), ['controller' => 'Personas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="detallesInformes index large-9 medium-8 columns content">
    <h3><?= __('Detalles Informes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nro_nota_recibida') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_nota_recibida') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_asignacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_inicio_informe') ?></th>
                <th scope="col"><?= $this->Paginator->sort('feha_entrega_informe') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('detalle_causa_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('persona_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($detallesInformes as $detallesInforme): ?>
            <tr>
                <td><?= $this->Number->format($detallesInforme->id) ?></td>
                <td><?= $this->Number->format($detallesInforme->nro_nota_recibida) ?></td>
                <td><?= h($detallesInforme->fecha_nota_recibida) ?></td>
                <td><?= h($detallesInforme->fecha_asignacion) ?></td>
                <td><?= h($detallesInforme->fecha_inicio_informe) ?></td>
                <td><?= h($detallesInforme->feha_entrega_informe) ?></td>
                <td><?= h($detallesInforme->created) ?></td>
                <td><?= h($detallesInforme->modified) ?></td>
                <td><?= $detallesInforme->has('detalles_causa') ? $this->Html->link($detallesInforme->detalles_causa->id, ['controller' => 'DetallesCausas', 'action' => 'view', $detallesInforme->detalles_causa->id]) : '' ?></td>
                <td><?= $detallesInforme->has('persona') ? $this->Html->link($detallesInforme->persona->id, ['controller' => 'Personas', 'action' => 'view', $detallesInforme->persona->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $detallesInforme->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $detallesInforme->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $detallesInforme->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detallesInforme->id)]) ?>
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
