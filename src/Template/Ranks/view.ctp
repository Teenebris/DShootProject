<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rank $rank
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Rank'), ['action' => 'edit', $rank->id_rank]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rank'), ['action' => 'delete', $rank->id_rank], ['confirm' => __('Are you sure you want to delete # {0}?', $rank->id_rank)]) ?> </li>
        <li><?= $this->Html->link(__('List Ranks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rank'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ranks view large-9 medium-8 columns content">
    <h3><?= h($rank->id_rank) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id Rank') ?></th>
            <td><?= $this->Number->format($rank->id_rank) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Usr') ?></th>
            <td><?= $this->Number->format($rank->id_usr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rnk Overall') ?></th>
            <td><?= $this->Number->format($rank->rnk_overall) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rnk Average Per Shoot') ?></th>
            <td><?= $this->Number->format($rank->rnk_average_per_shoot) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rnk Nr Of Shoots') ?></th>
            <td><?= $this->Number->format($rank->rnk_nr_of_shoots) ?></td>
        </tr>
    </table>
</div>
