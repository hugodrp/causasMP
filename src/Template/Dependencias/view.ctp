<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dependencia $dependencia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dependencia'), ['action' => 'edit', $dependencia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dependencia'), ['action' => 'delete', $dependencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dependencia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dependencias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dependencia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Detalles Causas'), ['controller' => 'DetallesCausas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Detalles Causa'), ['controller' => 'DetallesCausas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dependencias view large-9 medium-8 columns content">
    <h3><?= h($dependencia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Abreviacion') ?></th>
            <td><?= h($dependencia->abreviacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($dependencia->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nro Dependencia') ?></th>
            <td><?= $this->Number->format($dependencia->nro_dependencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($dependencia->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($dependencia->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripcion') ?></h4>
        <?= $this->Text->autoParagraph(h($dependencia->descripcion)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Detalles Causas') ?></h4>
        <?php if (!empty($dependencia->detalles_causas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Anho') ?></th>
                <th scope="col"><?= __('Nro Entrada') ?></th>
                <th scope="col"><?= __('Unidad Fiscal') ?></th>
                <th scope="col"><?= __('Resultado') ?></th>
                <th scope="col"><?= __('Tiempo Resultado') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Circunscripcion Id') ?></th>
                <th scope="col"><?= __('Jurisdiccion Id') ?></th>
                <th scope="col"><?= __('Origen Id') ?></th>
                <th scope="col"><?= __('Dependencia Id') ?></th>
                <th scope="col"><?= __('Hecho Punible Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($dependencia->detalles_causas as $detallesCausas): ?>
            <tr>
                <td><?= h($detallesCausas->id) ?></td>
                <td><?= h($detallesCausas->anho) ?></td>
                <td><?= h($detallesCausas->nro_entrada) ?></td>
                <td><?= h($detallesCausas->unidad_fiscal) ?></td>
                <td><?= h($detallesCausas->resultado) ?></td>
                <td><?= h($detallesCausas->tiempo_resultado) ?></td>
                <td><?= h($detallesCausas->created) ?></td>
                <td><?= h($detallesCausas->modified) ?></td>
                <td><?= h($detallesCausas->circunscripcion_id) ?></td>
                <td><?= h($detallesCausas->jurisdiccion_id) ?></td>
                <td><?= h($detallesCausas->origen_id) ?></td>
                <td><?= h($detallesCausas->dependencia_id) ?></td>
                <td><?= h($detallesCausas->hecho_punible_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DetallesCausas', 'action' => 'view', $detallesCausas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DetallesCausas', 'action' => 'edit', $detallesCausas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DetallesCausas', 'action' => 'delete', $detallesCausas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detallesCausas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
