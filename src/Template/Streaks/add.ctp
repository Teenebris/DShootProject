<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Streak $streak
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Streaks'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="streaks form large-9 medium-8 columns content">
    <?= $this->Form->create($streak) ?>
    <fieldset>
        <legend><?= __('Add Streak') ?></legend>
        <?php
            echo $this->Form->control('id_weapon');
            echo $this->Form->control('id_usr');
            echo $this->Form->control('id_lane');
            echo $this->Form->control('id_target');
            echo $this->Form->control('str_date');
            echo $this->Form->control('str_amount');
            echo $this->Form->control('str_range');
            echo $this->Form->control('str_mode');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
