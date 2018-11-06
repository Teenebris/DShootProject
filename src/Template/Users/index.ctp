<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>

    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Id_usr') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address_country') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address_city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address_street') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address_house') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address_falt_nr') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numer_licencji') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_group') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->Id_usr) ?></td>
                <td><?= h($user->mail) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->name) ?></td>
                <td><?= h($user->address_country) ?></td>
                <td><?= h($user->address_city) ?></td>
                <td><?= h($user->address_street) ?></td>
                <td><?= h($user->address_house) ?></td>
                <td><?= h($user->address_falt_nr) ?></td>
                <td><?= h($user->numer_licencji) ?></td>
                <td><?= $this->Number->format($user->role) ?></td>
                <td><?= $this->Number->format($user->id_group) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->Id_usr]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->Id_usr]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->Id_usr], ['confirm' => __('Are you sure you want to delete # {0}?', $user->Id_usr)]) ?>
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
