<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

    <?= $this->Form->create($user, ['type' => 'get']) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('mail');
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('name');
            echo $this->Form->control('address_country');
            echo $this->Form->control('address_city');
            echo $this->Form->control('address_street');
            echo $this->Form->control('address_house');
            echo $this->Form->control('address_flat_nr');
            echo $this->Form->control('numer_licencji', ['label' => 'Number license']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
