<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TiposTrabajo[]|\Cake\Collection\CollectionInterface $tiposTrabajos
 */
?>
<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>Tipos de Trabajos</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('descripcion', ['Nombres']) ?></th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($tiposTrabajos as $tiposTrabajo): ?>
            <tr>
                <td><?= $this->Number->format($tiposTrabajo->id) ?></td>
                <td><?= h($tiposTrabajo->descripcion) ?></td>
                <td>
                    <?= $this->Html->link('Ver', ['action' => 'view', $tiposTrabajo->id], ['class' => 'btn btn-sm btn-info']) ?>
                    <?= $this->Html->link('Editar', ['action' => 'edit', $tiposTrabajo->id], ['class' => 'btn btn-sm btn-primary']) ?>
                    <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $tiposTrabajo->id], ['confirm' => 'Eliminar Tipo de Trabajo ?', 'class' => 'btn btn-sm btn-danger']) ?>
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
