<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Persona $persona
 */
?>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
            <h2>Crear Persona</h2>
        </div>
        <?= $this->Form->create($persona, ['novalidate']) ?>
        <fieldset>
            <?= $this->element('personas/fields') ?>
        </fieldset>
        <?= $this->Form->button('Crear') ?>
        <?= $this->Form->end() ?>
    </div>
</div>