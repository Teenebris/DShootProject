<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Streak $streak
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Streak'), ['action' => 'edit', $streak->id_streak]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Streak'), ['action' => 'delete', $streak->id_streak], ['confirm' => __('Are you sure you want to delete # {0}?', $streak->id_streak)]) ?> </li>
        <li><?= $this->Html->link(__('List Streaks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Streak'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="streaks view large-9 medium-8 columns content">
    <h3><?= h($streak->id_streak) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id Streak') ?></th>
            <td><?= $this->Number->format($streak->id_streak) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Weapon') ?></th>
            <td><?= $this->Number->format($streak->id_weapon) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Usr') ?></th>
            <td><?= $this->Number->format($streak->id_usr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Lane') ?></th>
            <td><?= $this->Number->format($streak->id_lane) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Target') ?></th>
            <td><?= $this->Number->format($streak->id_target) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Str Amount') ?></th>
            <td><?= $this->Number->format($streak->str_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Str Range') ?></th>
            <td><?= $this->Number->format($streak->str_range) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Str Mode') ?></th>
            <td><?= $this->Number->format($streak->str_mode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Str Date') ?></th>
            <td><?= h($streak->str_date) ?></td>
        </tr>
    </table>
</div>
