<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reservation[]|\Cake\Collection\CollectionInterface $reservations
 */
?>
    <div class="other">
      <?= $this->Html->link('Zarezerwuj termin',['controller' => 'Reservations', 'action' => 'add', '_full' => true]);?>
    </div>

    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('res_date_start') ?></th>
                <th scope="col"><?= 'Number of hours' ?></th>
                <th scope="col"><?= 'Price' ?></th>
                <th scope="col"><?= 'Status' ?></th>
                <th scope="col"><?= 'Id lane' ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reservations as $reservation): ?>
            <tr>
                <td><?= h($reservation->res_date_start) ?></td>
                <td>

                <?php
                  echo $hours = floor(( strtotime( $reservation->res_date_end ) - strtotime( $reservation->res_date_start ) ) / 3600);
                ?>
                </td>
                <td><?= $this->Number->format($reservation->res_price) ?></td>
                <td><?= $this->Number->format($reservation->res_status) ?></td>
                <td><?= $this->Number->format($reservation->id_lane) ?></td>
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
