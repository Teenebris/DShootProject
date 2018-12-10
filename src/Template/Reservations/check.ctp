<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reservation $reservation
 */
?>
<div style="font-size: 20px;">
<h3> Wybierz godzinę/y:</h3>
<?= $this->Flash->render() ?>
<?= $this->Form->create() ?>
<fieldset>
  <table>
<?php for($i=1;$i<=23;$i++){
  if($i==1 || $i % 5 == 1)
  {
    echo "<tr>";
  }
  echo "<td>".$this->Form->checkbox('res_date_start', [ 'disabled' => $value[$i],
      'value' => $value[$i]]).$i."</td>";
  if($i % 5 == 0  || $i == 23)
  {
    echo "</tr>";
  }
}?>
  </table>
</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
</div>
