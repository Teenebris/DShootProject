<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('E-mail') ?></th>
            <td><?= h($user->mail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nazwa użytkownika') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Imię i nazwisko') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kraj') ?></th>
            <td><?= h($user->address_country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Miasto') ?></th>
            <td><?= h($user->address_city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ulica') ?></th>
            <td><?= h($user->address_street) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nr domu') ?></th>
            <td><?= h($user->address_house) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nr mieszkania') ?></th>
            <td><?= h($user->address_flat_nr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numer Licencji') ?></th>
            <td><?= h($user->numer_licencji) ?></td>
        </tr>
    </table>
