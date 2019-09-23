<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HechosPunible $hechosPunible
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Hechos Punible'), ['action' => 'edit', $hechosPunible->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Hechos Punible'), ['action' => 'delete', $hechosPunible->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hechosPunible->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Hechos Punibles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hechos Punible'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="hechosPunibles view large-9 medium-8 columns content">
    <h3><?= h($hechosPunible->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Articulo') ?></th>
            <td><?= h($hechosPunible->articulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($hechosPunible->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($hechosPunible->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($hechosPunible->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($hechosPunible->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Detalle') ?></h4>
        <?= $this->Text->autoParagraph(h($hechosPunible->detalle)); ?>
    </div>
</div>
