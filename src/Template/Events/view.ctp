<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
    <h3><?= h($event->id_event) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Evn Name') ?></th>
            <td><?= h($event->evn_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Evn Description') ?></th>
            <td><?= $event->evn_description ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Evn Path') ?></th>
            <td><img src="<?= $event->evn_path ?>"/></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Event') ?></th>
            <td><?= $this->Number->format($event->id_event) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Evn Flag') ?></th>
            <td><?= $this->Number->format($event->evn_flag) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Evn Date') ?></th>
            <td><?= h($event->evn_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Evn End Date') ?></th>
            <td><?= h($event->evn_end_date) ?></td>
        </tr>
    </table>    
    <br/>
