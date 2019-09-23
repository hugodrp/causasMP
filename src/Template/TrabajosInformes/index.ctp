<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TrabajosInforme[]|\Cake\Collection\CollectionInterface $trabajosInformes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Trabajos Informe'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Detalles Informes'), ['controller' => 'DetallesInformes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Detalles Informe'), ['controller' => 'DetallesInformes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipos Trabajos'), ['controller' => 'TiposTrabajos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipos Trabajo'), ['controller' => 'TiposTrabajos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="trabajosInformes index large-9 medium-8 columns content">
    <h3><?= __('Trabajos Informes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('detalle_informe_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_trabajo_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($trabajosInformes as $trabajosInforme): ?>
            <tr>
                <td><?= $this->Number->format($trabajosInforme->id) ?></td>
                <td><?= h($trabajosInforme->created) ?></td>
                <td><?= h($trabajosInforme->modified) ?></td>
                <td><?= $trabajosInforme->has('detalles_informe') ? $this->Html->link($trabajosInforme->detalles_informe->id, ['controller' => 'DetallesInformes', 'action' => 'view', $trabajosInforme->detalles_informe->id]) : '' ?></td>
                <td><?= $trabajosInforme->has('tipos_trabajo') ? $this->Html->link($trabajosInforme->tipos_trabajo->id, ['controller' => 'TiposTrabajos', 'action' => 'view', $trabajosInforme->tipos_trabajo->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $trabajosInforme->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $trabajosInforme->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trabajosInforme->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trabajosInforme->id)]) ?>
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
