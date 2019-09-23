<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TiposOrigene[]|\Cake\Collection\CollectionInterface $tiposOrigenes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tipos Origene'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tiposOrigenes index large-9 medium-8 columns content">
    <h3><?= __('Tipos Origenes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_origen') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tiposOrigenes as $tiposOrigene): ?>
            <tr>
                <td><?= $this->Number->format($tiposOrigene->id) ?></td>
                <td><?= h($tiposOrigene->tipo_origen) ?></td>
                <td><?= h($tiposOrigene->created) ?></td>
                <td><?= h($tiposOrigene->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tiposOrigene->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tiposOrigene->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tiposOrigene->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposOrigene->id)]) ?>
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
