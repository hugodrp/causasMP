<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TiposTrabajo $tiposTrabajo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tiposTrabajo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tiposTrabajo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tipos Trabajos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tiposTrabajos form large-9 medium-8 columns content">
    <?= $this->Form->create($tiposTrabajo) ?>
    <fieldset>
        <legend><?= __('Edit Tipos Trabajo') ?></legend>
        <?php
            echo $this->Form->control('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
