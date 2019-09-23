<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dependencia[]|\Cake\Collection\CollectionInterface $dependencias
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dependencia'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Detalles Causas'), ['controller' => 'DetallesCausas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Detalles Causa'), ['controller' => 'DetallesCausas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dependencias index large-9 medium-8 columns content">
    <h3><?= __('Dependencias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nro_dependencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('abreviacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dependencias as $dependencia): ?>
            <tr>
                <td><?= $this->Number->format($dependencia->id) ?></td>
                <td><?= $this->Number->format($dependencia->nro_dependencia) ?></td>
                <td><?= h($dependencia->abreviacion) ?></td>
                <td><?= h($dependencia->created) ?></td>
                <td><?= h($dependencia->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dependencia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dependencia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dependencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dependencia->id)]) ?>
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
