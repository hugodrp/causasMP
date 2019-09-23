<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TiposComunicacione $tiposComunicacione
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tipos Comunicacione'), ['action' => 'edit', $tiposComunicacione->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipos Comunicacione'), ['action' => 'delete', $tiposComunicacione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposComunicacione->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipos Comunicaciones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipos Comunicacione'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tiposComunicaciones view large-9 medium-8 columns content">
    <h3><?= h($tiposComunicacione->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tipo Comunicacion') ?></th>
            <td><?= h($tiposComunicacione->tipo_comunicacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tiposComunicacione->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($tiposComunicacione->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($tiposComunicacione->modified) ?></td>
        </tr>
    </table>
</div>
