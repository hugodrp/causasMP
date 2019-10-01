<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Origene[]|\Cake\Collection\CollectionInterface $origenes
 */
?>
<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>Orígenes</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nro_origen', ['Nro. Origen']) ?></th>
                <th><?= $this->Paginator->sort('descripcion', ['Descripción']) ?></th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($origenes as $origene): ?>
            <tr>
                <td><?= $this->Number->format($origene->id) ?></td>
                <td><?= $this->Number->format($origene->nro_origen) ?></td>
                <td><?= h($origene->descripcion) ?></td>
                <td>
                    <?= $this->Html->link('Ver', ['action' => 'view', $origene->id], ['class' => 'btn btn-sm btn-info']) ?>
                    <?= $this->Html->link('Editar', ['action' => 'edit', $origene->id], ['class' => 'btn btn-sm btn-primary']) ?>
                    <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $origene->id], ['confirm' => 'Eliminar Tipo de Trabajo ?', 'class' => 'btn btn-sm btn-danger']) ?>
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
