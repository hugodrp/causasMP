<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TiposComunicacione $tiposComunicacione
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tiposComunicacione->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tiposComunicacione->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tipos Comunicaciones'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tiposComunicaciones form large-9 medium-8 columns content">
    <?= $this->Form->create($tiposComunicacione) ?>
    <fieldset>
        <legend><?= __('Edit Tipos Comunicacione') ?></legend>
        <?php
            echo $this->Form->control('tipo_comunicacion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
