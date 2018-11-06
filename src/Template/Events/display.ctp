<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event[]|\Cake\Collection\CollectionInterface $events
 */
?>
<nav class="large-3 medium-4 columns">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?php if($this->Session->read('Auth.User.role') == 1)
        {
            echo $this->Html->link(__('New Event'), ['action' => 'add']);
            echo $this->Html->link(__('User list'), ['controller' => 'Users', 'action' => 'index']);
        }
        ?>
        </li>
    </ul>
</nav>

    <h3><?= __('Events') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_event') ?></th>
                <th scope="col"><?= $this->Paginator->sort('evn_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('evn_flag') ?></th>
                <th scope="col"><?= $this->Paginator->sort('evn_description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('evn_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('evn_path') ?></th>
                <?php if($this->Session->read('Auth.User.role') == 1)
                {
                    echo '<th scope="col" class="actions">';
                    echo 'Actions';
                    echo '</th>';
                } ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($events as $event): ?>
            <tr>
                <td><?= $this->Number->format($event->id_event) ?></td>
                <td><?= h($event->evn_name) ?></td>
                <td><?= $this->Number->format($event->evn_flag) ?></td>
                <td><?= $event->evn_description ?></td>
                <td><?= h($event->evn_date) ?></td>
                <td><img src="<?=$event->evn_path?>"/></td>
                <?php if($this->Session->read('Auth.User.role') == 1)
                {
                    echo '<td class="actions">';
                    echo $this->Html->link(__('View'), ['action' => 'view', $event->id_event]);
                    echo ' ';
                    echo $this->Html->link(__('Edit'), ['action' => 'edit', $event->id_event]);
                    echo ' ';
                    echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $event->id_event],
                        ['confirm' => __('Are you sure you want to delete # {0}?', $event->id_event)]);
                    echo '</td>';
                } ?>
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
