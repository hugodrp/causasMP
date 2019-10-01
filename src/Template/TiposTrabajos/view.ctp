<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TiposTrabajo $tiposTrabajo
 */
?>
<div class="well">
<h2><?= $tiposTrabajo->descripcion ?></h2>
    <br>
    <dl>
        <dt>Descripción</dt>
        <dd>
            <?= $tiposTrabajo->descripcion ?>
            &nbsp;
        </dd>
        <br>

        <dt>Creado</dt>
        <dd>
            <?= $tiposTrabajo->created->nice() ?>
            &nbsp;
        </dd>
        <br>

        <dt>Modificado</dt>
        <dd>
            <?= $tiposTrabajo->modified->nice() ?>
            &nbsp;
        </dd>
    </dl>
</div>