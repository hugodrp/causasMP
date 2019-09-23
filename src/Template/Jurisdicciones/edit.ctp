<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jurisdiccione $jurisdiccione
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $jurisdiccione->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $jurisdiccione->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Jurisdicciones'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="jurisdicciones form large-9 medium-8 columns content">
    <?= $this->Form->create($jurisdiccione) ?>
    <fieldset>
        <legend><?= __('Edit Jurisdiccione') ?></legend>
        <?php
            echo $this->Form->control('nro_jurisdiccion');
            echo $this->Form->control('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
