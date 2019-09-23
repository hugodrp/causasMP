<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DetallesCausa[]|\Cake\Collection\CollectionInterface $detallesCausas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Detalles Causa'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Circunscripciones'), ['controller' => 'Circunscripciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Circunscripcione'), ['controller' => 'Circunscripciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Jurisdicciones'), ['controller' => 'Jurisdicciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Jurisdiccione'), ['controller' => 'Jurisdicciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Origenes'), ['controller' => 'Origenes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Origene'), ['controller' => 'Origenes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dependencias'), ['controller' => 'Dependencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dependencia'), ['controller' => 'Dependencias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hechos Punibles'), ['controller' => 'HechosPunibles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hechos Punible'), ['controller' => 'HechosPunibles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="detallesCausas index large-9 medium-8 columns content">
    <h3><?= __('Detalles Causas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('anho') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nro_entrada') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unidad_fiscal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tiempo_resultado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('circunscripcion_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('jurisdiccion_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('origen_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dependencia_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hecho_punible_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($detallesCausas as $detallesCausa): ?>
            <tr>
                <td><?= $this->Number->format($detallesCausa->id) ?></td>
                <td><?= $this->Number->format($detallesCausa->anho) ?></td>
                <td><?= $this->Number->format($detallesCausa->nro_entrada) ?></td>
                <td><?= $this->Number->format($detallesCausa->unidad_fiscal) ?></td>
                <td><?= $this->Number->format($detallesCausa->tiempo_resultado) ?></td>
                <td><?= h($detallesCausa->created) ?></td>
                <td><?= h($detallesCausa->modified) ?></td>
                <td><?= $detallesCausa->has('circunscripcione') ? $this->Html->link($detallesCausa->circunscripcione->id, ['controller' => 'Circunscripciones', 'action' => 'view', $detallesCausa->circunscripcione->id]) : '' ?></td>
                <td><?= $detallesCausa->has('jurisdiccione') ? $this->Html->link($detallesCausa->jurisdiccione->id, ['controller' => 'Jurisdicciones', 'action' => 'view', $detallesCausa->jurisdiccione->id]) : '' ?></td>
                <td><?= $detallesCausa->has('origene') ? $this->Html->link($detallesCausa->origene->id, ['controller' => 'Origenes', 'action' => 'view', $detallesCausa->origene->id]) : '' ?></td>
                <td><?= $detallesCausa->has('dependencia') ? $this->Html->link($detallesCausa->dependencia->id, ['controller' => 'Dependencias', 'action' => 'view', $detallesCausa->dependencia->id]) : '' ?></td>
                <td><?= $detallesCausa->has('hechos_punible') ? $this->Html->link($detallesCausa->hechos_punible->id, ['controller' => 'HechosPunibles', 'action' => 'view', $detallesCausa->hechos_punible->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $detallesCausa->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $detallesCausa->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $detallesCausa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detallesCausa->id)]) ?>
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
