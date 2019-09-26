<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Persona $persona
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar Persona'), ['action' => 'edit', $persona->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Eliminar Persona'), ['action' => 'delete', $persona->id], ['confirm' => __('Estás seguro que quieres eliminar # {0}?', $persona->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Personas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nueva Persona'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Detalles Comunicaciones'), ['controller' => 'DetallesComunicaciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Detalles Comunicacione'), ['controller' => 'DetallesComunicaciones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Detalles Informes'), ['controller' => 'DetallesInformes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Detalles Informe'), ['controller' => 'DetallesInformes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="personas view large-9 medium-8 columns content">
    <h3><?= h($persona->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($persona->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido') ?></th>
            <td><?= h($persona->apellido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cic') ?></th>
            <td><?= h($persona->cic) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Funcionario') ?></th>
            <td><?= h($persona->funcionario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fiscal') ?></th>
            <td><?= h($persona->fiscal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($persona->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($persona->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($persona->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Fecha Nacimiento') ?></h4>
        <?= $this->Text->autoParagraph(h($persona->fecha_nacimiento)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Detalles Comunicaciones') ?></h4>
        <?php if (!empty($persona->detalles_comunicaciones)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Informacion') ?></th>
                <th scope="col"><?= __('Fecha Registro') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Persona Id') ?></th>
                <th scope="col"><?= __('Tipo Comunicacion Id') ?></th>
                <th scope="col"><?= __('Tipo Origen Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($persona->detalles_comunicaciones as $detallesComunicaciones): ?>
            <tr>
                <td><?= h($detallesComunicaciones->id) ?></td>
                <td><?= h($detallesComunicaciones->informacion) ?></td>
                <td><?= h($detallesComunicaciones->fecha_registro) ?></td>
                <td><?= h($detallesComunicaciones->created) ?></td>
                <td><?= h($detallesComunicaciones->modified) ?></td>
                <td><?= h($detallesComunicaciones->persona_id) ?></td>
                <td><?= h($detallesComunicaciones->tipo_comunicacion_id) ?></td>
                <td><?= h($detallesComunicaciones->tipo_origen_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DetallesComunicaciones', 'action' => 'view', $detallesComunicaciones->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DetallesComunicaciones', 'action' => 'edit', $detallesComunicaciones->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DetallesComunicaciones', 'action' => 'delete', $detallesComunicaciones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detallesComunicaciones->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Detalles Informes') ?></h4>
        <?php if (!empty($persona->detalles_informes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nro Nota Recibida') ?></th>
                <th scope="col"><?= __('Fecha Nota Recibida') ?></th>
                <th scope="col"><?= __('Fecha Asignacion') ?></th>
                <th scope="col"><?= __('Fecha Inicio Informe') ?></th>
                <th scope="col"><?= __('Nro Informe Entrega') ?></th>
                <th scope="col"><?= __('Nro Nota Entrega') ?></th>
                <th scope="col"><?= __('Feha Entrega Informe') ?></th>
                <th scope="col"><?= __('Categoria Informe') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Detalle Causa Id') ?></th>
                <th scope="col"><?= __('Persona Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($persona->detalles_informes as $detallesInformes): ?>
            <tr>
                <td><?= h($detallesInformes->id) ?></td>
                <td><?= h($detallesInformes->nro_nota_recibida) ?></td>
                <td><?= h($detallesInformes->fecha_nota_recibida) ?></td>
                <td><?= h($detallesInformes->fecha_asignacion) ?></td>
                <td><?= h($detallesInformes->fecha_inicio_informe) ?></td>
                <td><?= h($detallesInformes->nro_informe_entrega) ?></td>
                <td><?= h($detallesInformes->nro_nota_entrega) ?></td>
                <td><?= h($detallesInformes->feha_entrega_informe) ?></td>
                <td><?= h($detallesInformes->categoria_informe) ?></td>
                <td><?= h($detallesInformes->created) ?></td>
                <td><?= h($detallesInformes->modified) ?></td>
                <td><?= h($detallesInformes->detalle_causa_id) ?></td>
                <td><?= h($detallesInformes->persona_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DetallesInformes', 'action' => 'view', $detallesInformes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DetallesInformes', 'action' => 'edit', $detallesInformes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DetallesInformes', 'action' => 'delete', $detallesInformes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $detallesInformes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
