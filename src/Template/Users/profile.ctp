<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
    <h3>Witaj: <?= h($user->name) ?></h3>
    <?= $this->Html->link(__('Edit profile'), ['action' => 'view', $user->Id_usr]) ?>
    <?= $this->Html->link(__('View profile'), ['action' => 'view', $user->Id_usr]) ?>
