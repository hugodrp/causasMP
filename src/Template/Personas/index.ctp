<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Persona[]|\Cake\Collection\CollectionInterface $personas
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Persona'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Detalles Comunicaciones'), ['controller' => 'DetallesComunicaciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Detalles Comunicacione'), ['controller' => 'DetallesComunicaciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Detalles Informes'), ['controller' => 'DetallesInformes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Detalles Informe'), ['controller' => 'DetallesInformes', 'action' => 'add']) ?></li>
    </ul>
</nav> -->
<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>Personas</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nombre',      ['Nombres']) ?></th>
                <th><?= $this->Paginator->sort('apellido',    ['Apellidos']) ?></th>
                <th><?= $this->Paginator->sort('cic',         ['Documento de Identidad']) ?></th>
                <th><?= $this->Paginator->sort('funcionario', ['Funcionario?']) ?></th>
                <th><?= $this->Paginator->sort('fiscal',      ['Fiscal?']) ?></th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($personas as $persona): ?>
                    <tr>
                        <td><?= $this->Number->format($persona->id) ?></td>
                        <td><?= h($persona->nombre) ?></td>
                        <td><?= h($persona->apellido) ?></td>
                        <td><?= h($persona->cic) ?></td>
                        <td><?= h($persona->funcionario) ?></td>
                        <td><?= h($persona->fiscal) ?></td>
                        <td>
                            <?= $this->Html->link('Ver', ['action' => 'view', $persona->id], ['class' => 'btn btn-sm btn-info']) ?>
                            <?= $this->Html->link('Editar', ['action' => 'edit', $persona->id], ['class' => 'btn btn-sm btn-primary']) ?>
                            <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $persona->id], ['confirm' => 'Eliminar persona ?', $persona->id, 'class' => 'btn btn-sm btn-danger']) ?>
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
