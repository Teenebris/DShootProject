<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Reservation Entity
 *
 * @property int $id_reservation
 * @property int $id_user
 * @property \Cake\I18n\FrozenTime $res_date_start
 * @property \Cake\I18n\FrozenTime $res_date_end
 * @property float $res_price
 * @property int $res_status
 * @property int $res_n_axis
 * @property int $id_lane
 */
class Reservation extends Entity
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
        'id_user' => true,
        'res_date_start' => true,
        'res_date_end' => true,
        'res_price' => true,
        'res_status' => true,
        'res_n_axis' => true,
        'id_lane' => true
    ];
}
