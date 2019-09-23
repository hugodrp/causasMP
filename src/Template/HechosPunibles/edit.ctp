<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HechosPunible $hechosPunible
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $hechosPunible->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $hechosPunible->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Hechos Punibles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="hechosPunibles form large-9 medium-8 columns content">
    <?= $this->Form->create($hechosPunible) ?>
    <fieldset>
        <legend><?= __('Edit Hechos Punible') ?></legend>
        <?php
            echo $this->Form->control('articulo');
            echo $this->Form->control('titulo');
            echo $this->Form->control('detalle');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
