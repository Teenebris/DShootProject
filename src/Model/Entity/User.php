<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $Id_usr
 * @property string $mail
 * @property string $nickname
 * @property string $password
 * @property string $name
 * @property string $address_country
 * @property string $address_city
 * @property string $address_street
 * @property string $address_house
 * @property string $address_falt_nr
 * @property string $numer_licencji
 * @property int $role
 * @property int $id_group
 */
class User extends Entity
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
        '*' => true,
        'id' => false,
        'mail' => true,
        'username' => true,
        'password' => true,
        'name' => true,
        'address_country' => true,
        'address_city' => true,
        'address_street' => true,
        'address_house' => true,
        'address_falt_nr' => true,
        'numer_licencji' => true,
        'role' => false,
        'id_group' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($password)
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher)->hash($password);
        }
    }

}
