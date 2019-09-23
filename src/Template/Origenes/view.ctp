<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Origene $origene
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Origene'), ['action' => 'edit', $origene->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Origene'), ['action' => 'delete', $origene->id], ['confirm' => __('Are you sure you want to delete # {0}?', $origene->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Origenes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Origene'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="origenes view large-9 medium-8 columns content">
    <h3><?= h($origene->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($origene->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nro Origen') ?></th>
            <td><?= $this->Number->format($origene->nro_origen) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($origene->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($origene->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripcion') ?></h4>
        <?= $this->Text->autoParagraph(h($origene->descripcion)); ?>
    </div>
</div>
