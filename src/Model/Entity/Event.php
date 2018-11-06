<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property int $id_event
 * @property string $evn_name
 * @property int $evn_flag
 * @property string $evn_description
 * @property \Cake\I18n\FrozenTime $evn_date
 * @property \Cake\I18n\FrozenTime $evn_end_date
 * @property string $evn_path
 */
class Event extends Entity
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
        'evn_name' => true,
        'evn_flag' => true,
        'evn_description' => true,
        'evn_date' => true,
        'evn_end_date' => true,
        'evn_path' => true
    ];
}
