<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TiposTrabajo $tiposTrabajo
 */
?>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
            <h2>Editar Tipo Trabajo</h2>
        </div>
        <?= $this->Form->create($tiposTrabajo, ['novalidate']) ?>
        <fieldset>
            <?= $this->element('tiposTrabajos/fields') ?>
        </fieldset>
        <?= $this->Form->button('Editar') ?>
        <?= $this->Form->end() ?>
    </div>
</div>
