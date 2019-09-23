<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Circunscripcione $circunscripcione
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Circunscripcione'), ['action' => 'edit', $circunscripcione->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Circunscripcione'), ['action' => 'delete', $circunscripcione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $circunscripcione->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Circunscripciones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Circunscripcione'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="circunscripciones view large-9 medium-8 columns content">
    <h3><?= h($circunscripcione->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Circunscripcion') ?></th>
            <td><?= h($circunscripcione->circunscripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($circunscripcione->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($circunscripcione->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($circunscripcione->modified) ?></td>
        </tr>
    </table>
</div>
