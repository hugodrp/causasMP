<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Causa[]|\Cake\Collection\CollectionInterface $causas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Causa'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dependencias'), ['controller' => 'Dependencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dependencia'), ['controller' => 'Dependencias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Origenes'), ['controller' => 'Origenes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Origene'), ['controller' => 'Origenes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Jurisdicciones'), ['controller' => 'Jurisdicciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Jurisdiccione'), ['controller' => 'Jurisdicciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Circunscripciones'), ['controller' => 'Circunscripciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Circunscripcione'), ['controller' => 'Circunscripciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hechos Punibles'), ['controller' => 'HechosPunibles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hechos Punible'), ['controller' => 'HechosPunibles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="causas index large-9 medium-8 columns content">
    <h3><?= __('Causas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('anho') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nro_entrada') ?></th>
                <th scope="col"><?= $this->Paginator->sort('caratula') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unidad_fiscal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dependencia_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('origen_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('jurisdiccion_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('circunscripcion_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hecho_punible_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($causas as $causa): ?>
            <tr>
                <td><?= $this->Number->format($causa->id) ?></td>
                <td><?= $this->Number->format($causa->anho) ?></td>
                <td><?= $this->Number->format($causa->nro_entrada) ?></td>
                <td><?= h($causa->caratula) ?></td>
                <td><?= h($causa->unidad_fiscal) ?></td>
                <td><?= h($causa->created) ?></td>
                <td><?= h($causa->modified) ?></td>
                <td><?= $causa->has('dependencia') ? $this->Html->link($causa->dependencia->id, ['controller' => 'Dependencias', 'action' => 'view', $causa->dependencia->id]) : '' ?></td>
                <td><?= $causa->has('origene') ? $this->Html->link($causa->origene->id, ['controller' => 'Origenes', 'action' => 'view', $causa->origene->id]) : '' ?></td>
                <td><?= $causa->has('jurisdiccione') ? $this->Html->link($causa->jurisdiccione->id, ['controller' => 'Jurisdicciones', 'action' => 'view', $causa->jurisdiccione->id]) : '' ?></td>
                <td><?= $causa->has('circunscripcione') ? $this->Html->link($causa->circunscripcione->id, ['controller' => 'Circunscripciones', 'action' => 'view', $causa->circunscripcione->id]) : '' ?></td>
                <td><?= $causa->has('hechos_punible') ? $this->Html->link($causa->hechos_punible->id, ['controller' => 'HechosPunibles', 'action' => 'view', $causa->hechos_punible->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $causa->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $causa->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $causa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $causa->id)]) ?>
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
