<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * WeaponsFixture
 *
 */
class WeaponsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_weapon' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'id_usr' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'wpn_sr_number' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'wpn_type' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'wpn_caliber' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_Weapons_Users1_idx' => ['type' => 'index', 'columns' => ['id_usr'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_weapon'], 'length' => []],
            'id_weapon_UNIQUE' => ['type' => 'unique', 'columns' => ['id_weapon'], 'length' => []],
            'fk_Weapons_Users1' => ['type' => 'foreign', 'columns' => ['id_usr'], 'references' => ['users', 'Id_usr'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id_weapon' => 1,
                'id_usr' => 1,
                'wpn_sr_number' => 'Lorem ipsum dolor sit amet',
                'wpn_type' => 'Lorem ipsum dolor ',
                'wpn_caliber' => 'Lorem ipsum dolor '
            ],
        ];
        parent::init();
    }
}
