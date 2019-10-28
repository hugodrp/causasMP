<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DetallesCausa[]|\Cake\Collection\CollectionInterface $detallesCausas
 */
?>
<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>Detalles de Causas</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('anho',          ['Año']) ?></th>
                <th><?= $this->Paginator->sort('nro_entrada',   ['Nro. Entrada']) ?></th>
                <th><?= $this->Paginator->sort('unidad_fiscal', ['Unidad Fiscal']) ?></th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($detallesCausas as $detallesCausa): ?>
            <tr>
                <td><?= $this->Number->format($detallesCausa->id) ?></td>
                <td><?= h($detallesCausa->anho) ?></td>
                <td><?= h($detallesCausa->nro_entrada) ?></td>
                <td><?= h($detallesCausa->unidad_fiscal) ?></td>
                <td>
                    <?= $this->Html->link('Ver', ['action' => 'view', $user->id], ['class' => 'btn btn-sm btn-info']) ?>
                    <?= $this->Html->link('Editar', ['action' => 'edit', $user->id], ['class' => 'btn btn-sm btn-primary']) ?>
                    <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $user->id], ['confirm' => 'Eliminar usuario ?', 'class' => 'btn btn-sm btn-danger']) ?>
                </td>
            </tr>
        <?php endforeach; ?>
            </tbody>
            </table>
        </div>

        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->prev('< Anterior') ?>
                <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
                <?= $this->Paginator->next('Siguiente >') ?>
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
        </div>
    </div>
</div>

<div class="detallesCausas index large-9 medium-8 columns content">
    <h3><?= __('Detalles Causas') ?></h3>
    <table cellpadding="0" cellspacing="0">
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
