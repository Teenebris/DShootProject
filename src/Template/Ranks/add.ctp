<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rank $rank
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ranks'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="ranks form large-9 medium-8 columns content">
    <?= $this->Form->create($rank) ?>
    <fieldset>
        <legend><?= __('Add Rank') ?></legend>
        <?php
            echo $this->Form->control('id_usr');
            echo $this->Form->control('rnk_overall');
            echo $this->Form->control('rnk_average_per_shoot');
            echo $this->Form->control('rnk_nr_of_shoots');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
