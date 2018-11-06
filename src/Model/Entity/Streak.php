<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Streak Entity
 *
 * @property int $id_streak
 * @property int $id_weapon
 * @property int $id_usr
 * @property int $id_lane
 * @property int $id_target
 * @property \Cake\I18n\FrozenTime $str_date
 * @property int $str_amount
 * @property float $str_range
 * @property int $str_mode
 */
class Streak extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'id_weapon' => true,
        'id_usr' => true,
        'id_lane' => true,
        'id_target' => true,
        'str_date' => true,
        'str_amount' => true,
        'str_range' => true,
        'str_mode' => true
    ];
}
