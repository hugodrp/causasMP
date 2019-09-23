<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Circunscripcione $circunscripcione
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $circunscripcione->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $circunscripcione->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Circunscripciones'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="circunscripciones form large-9 medium-8 columns content">
    <?= $this->Form->create($circunscripcione) ?>
    <fieldset>
        <legend><?= __('Edit Circunscripcione') ?></legend>
        <?php
            echo $this->Form->control('circunscripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
