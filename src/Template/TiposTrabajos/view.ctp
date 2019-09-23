<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $tiposTrabajo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tipos Trabajo'), ['action' => 'edit', $tiposTrabajo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipos Trabajo'), ['action' => 'delete', $tiposTrabajo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposTrabajo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipos Trabajos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipos Trabajo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tiposTrabajos view large-9 medium-8 columns content">
    <h3><?= h($tiposTrabajo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tiposTrabajo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($tiposTrabajo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($tiposTrabajo->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripcion') ?></h4>
        <?= $this->Text->autoParagraph(h($tiposTrabajo->descripcion)); ?>
    </div>
</div>
