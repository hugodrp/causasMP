<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DetallesCausa $detallesCausa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Detalles Causa'), ['action' => 'edit', $detallesCausa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Detalles Causa'), ['action' => 'delete', $detallesCausa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detallesCausa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Detalles Causas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Detalles Causa'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Circunscripciones'), ['controller' => 'Circunscripciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Circunscripcione'), ['controller' => 'Circunscripciones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Jurisdicciones'), ['controller' => 'Jurisdicciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Jurisdiccione'), ['controller' => 'Jurisdicciones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Origenes'), ['controller' => 'Origenes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Origene'), ['controller' => 'Origenes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Dependencias'), ['controller' => 'Dependencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dependencia'), ['controller' => 'Dependencias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hechos Punibles'), ['controller' => 'HechosPunibles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hechos Punible'), ['controller' => 'HechosPunibles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="detallesCausas view large-9 medium-8 columns content">
    <h3><?= h($detallesCausa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Circunscripcione') ?></th>
            <td><?= $detallesCausa->has('circunscripcione') ? $this->Html->link($detallesCausa->circunscripcione->id, ['controller' => 'Circunscripciones', 'action' => 'view', $detallesCausa->circunscripcione->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Jurisdiccione') ?></th>
            <td><?= $detallesCausa->has('jurisdiccione') ? $this->Html->link($detallesCausa->jurisdiccione->id, ['controller' => 'Jurisdicciones', 'action' => 'view', $detallesCausa->jurisdiccione->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Origene') ?></th>
            <td><?= $detallesCausa->has('origene') ? $this->Html->link($detallesCausa->origene->id, ['controller' => 'Origenes', 'action' => 'view', $detallesCausa->origene->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dependencia') ?></th>
            <td><?= $detallesCausa->has('dependencia') ? $this->Html->link($detallesCausa->dependencia->id, ['controller' => 'Dependencias', 'action' => 'view', $detallesCausa->dependencia->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hechos Punible') ?></th>
            <td><?= $detallesCausa->has('hechos_punible') ? $this->Html->link($detallesCausa->hechos_punible->id, ['controller' => 'HechosPunibles', 'action' => 'view', $detallesCausa->hechos_punible->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($detallesCausa->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Anho') ?></th>
            <td><?= $this->Number->format($detallesCausa->anho) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nro Entrada') ?></th>
            <td><?= $this->Number->format($detallesCausa->nro_entrada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unidad Fiscal') ?></th>
            <td><?= $this->Number->format($detallesCausa->unidad_fiscal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tiempo Resultado') ?></th>
            <td><?= $this->Number->format($detallesCausa->tiempo_resultado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($detallesCausa->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($detallesCausa->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Resultado') ?></h4>
        <?= $this->Text->autoParagraph(h($detallesCausa->resultado)); ?>
    </div>
</div>
