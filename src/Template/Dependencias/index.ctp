<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dependencia[]|\Cake\Collection\CollectionInterface $dependencias
 */
?>
<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>Dependencias</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nro_dependencia', ['Nro. Dependencia']) ?></th>
                <th><?= $this->Paginator->sort('descripcion', ['Descripción']) ?></th>
                <th><?= $this->Paginator->sort('abreviacion', ['Abreviación']) ?></th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($dependencias as $dependencia): ?>
            <tr>
                <td><?= $this->Number->format($dependencia->id) ?></td>
                <td><?= $this->Number->format($dependencia->nro_dependencia) ?></td>
                <td><?= h($dependencia->descripcion) ?></td>
                <td><?= h($dependencia->abreviacion) ?></td>
                <td>
                    <?= $this->Html->link('Ver', ['action' => 'view', $dependencia->id], ['class' => 'btn btn-sm btn-info']) ?>
                    <?= $this->Html->link('Editar', ['action' => 'edit', $dependencia->id], ['class' => 'btn btn-sm btn-primary']) ?>
                    <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $dependencia->id], ['confirm' => 'Eliminar Tipo de Trabajo ?', 'class' => 'btn btn-sm btn-danger']) ?>
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
