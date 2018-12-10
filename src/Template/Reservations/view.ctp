<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reservation $reservation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Reservation'), ['action' => 'edit', $reservation->id_reservation]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Reservation'), ['action' => 'delete', $reservation->id_reservation], ['confirm' => __('Are you sure you want to delete # {0}?', $reservation->id_reservation)]) ?> </li>
        <li><?= $this->Html->link(__('List Reservations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reservation'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="reservations view large-9 medium-8 columns content">
    <h3><?= h($reservation->id_reservation) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id Reservation') ?></th>
            <td><?= $this->Number->format($reservation->id_reservation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id User') ?></th>
            <td><?= $this->Number->format($reservation->id_user) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Res Price') ?></th>
            <td><?= $this->Number->format($reservation->res_price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Res Status') ?></th>
            <td><?= $this->Number->format($reservation->res_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Res N Axis') ?></th>
            <td><?= $this->Number->format($reservation->res_n_axis) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Lane') ?></th>
            <td><?= $this->Number->format($reservation->id_lane) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Res Date Start') ?></th>
            <td><?= h($reservation->res_date_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Res Date End') ?></th>
            <td><?= h($reservation->res_date_end) ?></td>
        </tr>
    </table>
</div>
