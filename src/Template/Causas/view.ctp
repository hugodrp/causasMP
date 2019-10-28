<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Causa $causa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Causa'), ['action' => 'edit', $causa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Causa'), ['action' => 'delete', $causa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $causa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Causas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Causa'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Dependencias'), ['controller' => 'Dependencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dependencia'), ['controller' => 'Dependencias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Origenes'), ['controller' => 'Origenes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Origene'), ['controller' => 'Origenes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Jurisdicciones'), ['controller' => 'Jurisdicciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Jurisdiccione'), ['controller' => 'Jurisdicciones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Circunscripciones'), ['controller' => 'Circunscripciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Circunscripcione'), ['controller' => 'Circunscripciones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hechos Punibles'), ['controller' => 'HechosPunibles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hechos Punible'), ['controller' => 'HechosPunibles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="causas view large-9 medium-8 columns content">
    <h3><?= h($causa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Caratula') ?></th>
            <td><?= h($causa->caratula) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unidad Fiscal') ?></th>
            <td><?= h($causa->unidad_fiscal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dependencia') ?></th>
            <td><?= $causa->has('dependencia') ? $this->Html->link($causa->dependencia->id, ['controller' => 'Dependencias', 'action' => 'view', $causa->dependencia->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Origene') ?></th>
            <td><?= $causa->has('origene') ? $this->Html->link($causa->origene->id, ['controller' => 'Origenes', 'action' => 'view', $causa->origene->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Jurisdiccione') ?></th>
            <td><?= $causa->has('jurisdiccione') ? $this->Html->link($causa->jurisdiccione->id, ['controller' => 'Jurisdicciones', 'action' => 'view', $causa->jurisdiccione->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Circunscripcione') ?></th>
            <td><?= $causa->has('circunscripcione') ? $this->Html->link($causa->circunscripcione->id, ['controller' => 'Circunscripciones', 'action' => 'view', $causa->circunscripcione->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hechos Punible') ?></th>
            <td><?= $causa->has('hechos_punible') ? $this->Html->link($causa->hechos_punible->id, ['controller' => 'HechosPunibles', 'action' => 'view', $causa->hechos_punible->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($causa->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Anho') ?></th>
            <td><?= $this->Number->format($causa->anho) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nro Entrada') ?></th>
            <td><?= $this->Number->format($causa->nro_entrada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($causa->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($causa->modified) ?></td>
        </tr>
    </table>
</div>
