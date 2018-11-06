<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rank[]|\Cake\Collection\CollectionInterface $ranks
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Rank'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ranks index large-9 medium-8 columns content">
    <h3><?= __('Ranks') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_rank') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_usr') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rnk_overall') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rnk_average_per_shoot') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rnk_nr_of_shoots') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ranks as $rank): ?>
            <tr>
                <td><?= $this->Number->format($rank->id_rank) ?></td>
                <td><?= $this->Number->format($rank->id_usr) ?></td>
                <td><?= $this->Number->format($rank->rnk_overall) ?></td>
                <td><?= $this->Number->format($rank->rnk_average_per_shoot) ?></td>
                <td><?= $this->Number->format($rank->rnk_nr_of_shoots) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $rank->id_rank]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rank->id_rank]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rank->id_rank], ['confirm' => __('Are you sure you want to delete # {0}?', $rank->id_rank)]) ?>
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
