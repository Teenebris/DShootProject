<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->control('address_country');
            echo $this->Form->control('address_city');
            echo $this->Form->control('address_street');
            echo $this->Form->control('address_house');
            echo $this->Form->control('address_falt_nr');
            echo $this->Form->control('numer_licencji');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
