<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rank $rank
 */
?>

<?php $i=1; ?>
    <h3><?= h($rank->id_rank) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"></th>
            <td><?= $this->Number->format($rank->id_rank) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Usr') ?></th>
            <?php foreach ($rank->users as $dUser): ?>
            <td><?= $dUser->username ?></td>
            <?php endforeach; ?>
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
