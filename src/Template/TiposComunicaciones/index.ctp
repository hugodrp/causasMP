<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TiposComunicacione[]|\Cake\Collection\CollectionInterface $tiposComunicaciones
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tipos Comunicacione'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tiposComunicaciones index large-9 medium-8 columns content">
    <h3><?= __('Tipos Comunicaciones') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_comunicacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tiposComunicaciones as $tiposComunicacione): ?>
            <tr>
                <td><?= $this->Number->format($tiposComunicacione->id) ?></td>
                <td><?= h($tiposComunicacione->tipo_comunicacion) ?></td>
                <td><?= h($tiposComunicacione->created) ?></td>
                <td><?= h($tiposComunicacione->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tiposComunicacione->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tiposComunicacione->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tiposComunicacione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposComunicacione->id)]) ?>
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
