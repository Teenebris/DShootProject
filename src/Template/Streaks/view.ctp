<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Streak $streak
 */
?>

<?php
$value = 0;
$data = "";
$ammo = 0;
  foreach ($streak->shoots as $dShoot):
    $value = $value + $dShoot->sht_value;
    $data = $data.$dShoot->sht_x.",".$dShoot->sht_y.";";
    $ammo++;
  endforeach;
?>

  <h3><?= h('Statystyki') ?></h3>
  <div style="width:65%; height:auto; margin:0px auto; float:left;">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Numer serii') ?></th>
            <td><?= $this->Number->format($streak->id_streak) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nazwa bronii') ?></th>
            <td><?= h($streak->weapon->wpn_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numer linii') ?></th>
            <td><?= $this->Number->format($streak->id_lane) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ilość oddanych strzałów') ?></th>
            <td><?= $this->Number->format($streak->str_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ilość celnych strzałów') ?></th>
            <td><?= $this->Number->format($ammo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Odległość') ?></th>
            <td><?= $this->Number->format($streak->str_range) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($streak->str_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Punkty') ?></th>
            <td><?= h($value) ?></td>
        </tr>
    </table>
  </div>
  <div style="width:5%; height:auto; margin:0px auto; float:left;">.</div>
  <div style="width:30%; height:auto; margin:0px auto; float:left;">
    <?= $this->Html->image('tarcza.php?data='.$data, ['alt' => 'Google']);?>
  </div>
