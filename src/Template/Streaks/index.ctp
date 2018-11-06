<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Streak[]|\Cake\Collection\CollectionInterface $streaks
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Streak'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="streaks index large-9 medium-8 columns content">
    <h3><?= __('Streaks') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_streak') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_weapon') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_usr') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_lane') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_target') ?></th>
                <th scope="col"><?= $this->Paginator->sort('str_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('str_amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('str_range') ?></th>
                <th scope="col"><?= $this->Paginator->sort('str_mode') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($streaks as $streak): ?>
            <tr>
                <td><?= $this->Number->format($streak->id_streak) ?></td>
                <td><?= $this->Number->format($streak->id_weapon) ?></td>
                <td><?= $this->Number->format($streak->id_usr) ?></td>
                <td><?= $this->Number->format($streak->id_lane) ?></td>
                <td><?= $this->Number->format($streak->id_target) ?></td>
                <td><?= h($streak->str_date) ?></td>
                <td><?= $this->Number->format($streak->str_amount) ?></td>
                <td><?= $this->Number->format($streak->str_range) ?></td>
                <td><?= $this->Number->format($streak->str_mode) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $streak->id_streak]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $streak->id_streak]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $streak->id_streak], ['confirm' => __('Are you sure you want to delete # {0}?', $streak->id_streak)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
