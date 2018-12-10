<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event[]|\Cake\Collection\CollectionInterface $events
 */
?>
<div>
  <h3><?= h('Ogłoszenia') ?></h3>
  <?php foreach ($events as $event): ?>
    <div>
      <div class="eventsData">
        <h2 style="text-align: center;"> <?= h($event->evn_name) ?> </h2>
        <div>
          <?= $event->evn_description ?>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>
