<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Weapon Entity
 *
 * @property int $id_weapon
 * @property int $id_usr
 * @property string $wpn_sr_number
 * @property string $wpn_type
 * @property string $wpn_caliber
 */
class Weapon extends Entity
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
        'id_usr' => true,
        'wpn_sr_number' => true,
        'wpn_type' => true,
        'wpn_caliber' => true
    ];
}
