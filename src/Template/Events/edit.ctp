<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>

<script>
    jQuery(function($){
        $('#tresc').ckeditor();
    })
</script>

<?= $this->Html->script('ckeditor/ckeditor.js') ?>
<?= $this->Html->script('ckeditor/adapters/jquery.js') ?>
<?= $this->Html->script('http://cdn.ckeditor.com/4.9.2/full/ckeditor.js') ?>

    <?= $this->Form->create($event) ?>
    <fieldset>
        <legend><?= __('Edit Event') ?></legend>
        <?php
            echo $this->Form->control('evn_name');
            echo $this->Form->control('evn_flag');
            //echo $this->Form->control('evn_description');
            echo $this->Form->textarea('evn_description',['id'=>'tresc','label'=>__('Treść artykułu')]);
            echo $this->Form->control('evn_date');
            echo $this->Form->control('evn_end_date');
            echo '<img src="'. $event->evn_path.'"/>';
            echo $this->Form->control('evn_path');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
