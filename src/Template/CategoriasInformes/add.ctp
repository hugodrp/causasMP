<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoriasInforme $categoriasInforme
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Categorias Informes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="categoriasInformes form large-9 medium-8 columns content">
    <?= $this->Form->create($categoriasInforme) ?>
    <fieldset>
        <legend><?= __('Add Categorias Informe') ?></legend>
        <?php
            echo $this->Form->control('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
