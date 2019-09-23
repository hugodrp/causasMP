<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TiposComunicacione $tiposComunicacione
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tipos Comunicaciones'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tiposComunicaciones form large-9 medium-8 columns content">
    <?= $this->Form->create($tiposComunicacione) ?>
    <fieldset>
        <legend><?= __('Add Tipos Comunicacione') ?></legend>
        <?php
            echo $this->Form->control('tipo_comunicacion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
