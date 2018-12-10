<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ReservationsFixture
 *
 */
class ReservationsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_reservation' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'id_user' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'res_date_start' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'res_date_end' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'res_price' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'res_status' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'res_n_axis' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_lane' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_Reservations_Users1_idx' => ['type' => 'index', 'columns' => ['id_user'], 'length' => []],
            'fk_Reservations_Lanes1_idx' => ['type' => 'index', 'columns' => ['id_lane'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_reservation'], 'length' => []],
            'id_reservation_UNIQUE' => ['type' => 'unique', 'columns' => ['id_reservation'], 'length' => []],
            'fk_Reservations_Lanes' => ['type' => 'foreign', 'columns' => ['id_lane'], 'references' => ['lanes', 'id_lane'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Reservations_Users1' => ['type' => 'foreign', 'columns' => ['id_user'], 'references' => ['users', 'Id_usr'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'id_reservation' => 1,
                'id_user' => 1,
                'res_date_start' => '2018-12-10 12:08:25',
                'res_date_end' => '2018-12-10 12:08:25',
                'res_price' => 1,
                'res_status' => 1,
                'res_n_axis' => 1,
                'id_lane' => 1
            ],
        ];
        parent::init();
    }
}
