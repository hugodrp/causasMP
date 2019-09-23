<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jurisdiccione $jurisdiccione
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Jurisdiccione'), ['action' => 'edit', $jurisdiccione->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Jurisdiccione'), ['action' => 'delete', $jurisdiccione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jurisdiccione->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Jurisdicciones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Jurisdiccione'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="jurisdicciones view large-9 medium-8 columns content">
    <h3><?= h($jurisdiccione->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($jurisdiccione->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nro Jurisdiccion') ?></th>
            <td><?= $this->Number->format($jurisdiccione->nro_jurisdiccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($jurisdiccione->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($jurisdiccione->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripcion') ?></h4>
        <?= $this->Text->autoParagraph(h($jurisdiccione->descripcion)); ?>
    </div>
</div>
