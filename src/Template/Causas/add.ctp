<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Causa $causa
 */
?>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
            <h2>Crear Registro de Causa</h2>
        </div>
        <?= $this->Form->create($causa, ['novalidate']) ?>
        <fieldset>
            <?= $this->element('causas/fields') ?>
        </fieldset>
        <?= $this->Form->button('Crear') ?>
        <?= $this->Form->end() ?>
    </div>
</div>

<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Causas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Dependencias'), ['controller' => 'Dependencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dependencia'), ['controller' => 'Dependencias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Origenes'), ['controller' => 'Origenes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Origene'), ['controller' => 'Origenes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Jurisdicciones'), ['controller' => 'Jurisdicciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Jurisdiccione'), ['controller' => 'Jurisdicciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Circunscripciones'), ['controller' => 'Circunscripciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Circunscripcione'), ['controller' => 'Circunscripciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hechos Punibles'), ['controller' => 'HechosPunibles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hechos Punible'), ['controller' => 'HechosPunibles', 'action' => 'add']) ?></li>
    </ul>
</nav> -->
<!-- <div class="causas form large-9 medium-8 columns content">
    <?= $this->Form->create($causa) ?>
    <fieldset>
        <legend><?= __('Add Causa') ?></legend>
        <?php
            echo $this->Form->control('anho');
            echo $this->Form->control('nro_entrada');
            echo $this->Form->control('caratula');
            echo $this->Form->control('unidad_fiscal');
            echo $this->Form->control('dependencia_id', ['options' => $dependencias]);
            echo $this->Form->control('origen_id', ['options' => $origenes]);
            echo $this->Form->control('jurisdiccion_id', ['options' => $jurisdicciones]);
            echo $this->Form->control('circunscripcion_id', ['options' => $circunscripciones]);
            echo $this->Form->control('hecho_punible_id', ['options' => $hechosPunibles]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div> -->
