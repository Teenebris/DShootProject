<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rank[]|\Cake\Collection\CollectionInterface $ranks
 */
?>

<?php $i=1; ?>

    <h3><?= __('Ranks') ?></h3>

    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_rank') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rnk_overall') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rnk_average_per_shoot') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rnk_nr_of_shoots') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ranks as $rank): ?>
            <tr>
                <td><?= $i; $i++; ?></td>
                <?php foreach ($rank->users as $dUser): ?>
                <td><?= $dUser->username ?></td>
                <?php endforeach; ?>
                <td><?= $this->Number->format($rank->rnk_overall) ?></td>
                <td><?= $this->Number->format($rank->rnk_average_per_shoot) ?></td>
                <td><?= $this->Number->format($rank->rnk_nr_of_shoots) ?></td>
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
