<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Origene[]|\Cake\Collection\CollectionInterface $origenes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Origene'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="origenes index large-9 medium-8 columns content">
    <h3><?= __('Origenes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nro_origen') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($origenes as $origene): ?>
            <tr>
                <td><?= $this->Number->format($origene->id) ?></td>
                <td><?= $this->Number->format($origene->nro_origen) ?></td>
                <td><?= h($origene->created) ?></td>
                <td><?= h($origene->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $origene->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $origene->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $origene->id], ['confirm' => __('Are you sure you want to delete # {0}?', $origene->id)]) ?>
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