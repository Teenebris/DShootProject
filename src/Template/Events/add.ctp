<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>

    <?= $this->Form->create($event) ?>
    <fieldset>
        <legend><?= __('Add Event') ?></legend>
        <?php
            echo $this->Form->control('evn_name');
            echo $this->Form->control('evn_flag');
            echo $this->Form->control('evn_description');
            echo $this->Form->control('evn_date');
            echo $this->Form->control('evn_end_date');
            echo $this->Form->control('evn_path');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
