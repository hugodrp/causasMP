<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoriasInforme $categoriasInforme
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Categorias Informe'), ['action' => 'edit', $categoriasInforme->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Categorias Informe'), ['action' => 'delete', $categoriasInforme->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoriasInforme->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categorias Informes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categorias Informe'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categoriasInformes view large-9 medium-8 columns content">
    <h3><?= h($categoriasInforme->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($categoriasInforme->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($categoriasInforme->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($categoriasInforme->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($categoriasInforme->modified) ?></td>
        </tr>
    </table>
</div>
