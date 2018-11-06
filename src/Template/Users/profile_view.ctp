<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Mail') ?></th>
            <td><?= h($user->mail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address Country') ?></th>
            <td><?= h($user->address_country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address City') ?></th>
            <td><?= h($user->address_city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address Street') ?></th>
            <td><?= h($user->address_street) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address House') ?></th>
            <td><?= h($user->address_house) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address Falt Nr') ?></th>
            <td><?= h($user->address_falt_nr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numer Licencji') ?></th>
            <td><?= h($user->numer_licencji) ?></td>
        </tr>
    </table>
