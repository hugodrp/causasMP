<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TiposOrigene $tiposOrigene
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tipos Origene'), ['action' => 'edit', $tiposOrigene->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipos Origene'), ['action' => 'delete', $tiposOrigene->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposOrigene->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipos Origenes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipos Origene'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tiposOrigenes view large-9 medium-8 columns content">
    <h3><?= h($tiposOrigene->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tipo Origen') ?></th>
            <td><?= h($tiposOrigene->tipo_origen) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tiposOrigene->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($tiposOrigene->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($tiposOrigene->modified) ?></td>
        </tr>
    </table>
</div>
