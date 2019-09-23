<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $tiposTrabajos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tipos Trabajo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tiposTrabajos index large-9 medium-8 columns content">
    <h3><?= __('Tipos Trabajos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tiposTrabajos as $tiposTrabajo): ?>
            <tr>
                <td><?= $this->Number->format($tiposTrabajo->id) ?></td>
                <td><?= h($tiposTrabajo->created) ?></td>
                <td><?= h($tiposTrabajo->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tiposTrabajo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tiposTrabajo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tiposTrabajo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposTrabajo->id)]) ?>
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
