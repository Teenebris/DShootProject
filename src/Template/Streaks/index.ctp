<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Streak[]|\Cake\Collection\CollectionInterface $streaks
 */
?>
    <h3><?= __('Streaks') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_streak') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_weapon') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_target') ?></th>
                <th scope="col"><?= $this->Paginator->sort('str_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('str_amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('str_range') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($streaks as $streak): ?>
            <tr>
                <td><?= $this->Number->format($streak->id_streak) ?></td>
                <td><?= $this->Number->format($streak->id_weapon) ?></td>
                <td><?= $this->Number->format($streak->id_target) ?></td>
                <td><?= h($streak->str_date) ?></td>
                <td><?= $this->Number->format($streak->str_amount) ?></td>
                <td><?= $this->Number->format($streak->str_range) ?></td>
                <td class="actions">
                    <?= $this->Html->image("cake.icon.png", [
                        "alt" => "View",
                        'url' => ['action' => 'view', $streak->id_streak]]);?>
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
