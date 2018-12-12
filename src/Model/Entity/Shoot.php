<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Shoot Entity
 *
 * @property int $id_shoot
 * @property int $id_streak
 * @property int $sht_value
 * @property float $sht_x
 * @property float $sht_y
 */
class Shoot extends Entity
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
        'id_streak' => true,
        'sht_value' => true,
        'sht_x' => true,
        'sht_y' => true
    ];
}
