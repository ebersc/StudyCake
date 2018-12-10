<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrdersFixture
 *
 */
class OrdersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'OrderID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'CustomerID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'EmployeeID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'OrderDate' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'ShipperID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_orders_customers' => ['type' => 'index', 'columns' => ['CustomerID'], 'length' => []],
            'FK_orders_employees' => ['type' => 'index', 'columns' => ['EmployeeID'], 'length' => []],
            'FK_orders_shippers' => ['type' => 'index', 'columns' => ['ShipperID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['OrderID'], 'length' => []],
            'FK_orders_customers' => ['type' => 'foreign', 'columns' => ['CustomerID'], 'references' => ['customers', 'CustomerID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_orders_employees' => ['type' => 'foreign', 'columns' => ['EmployeeID'], 'references' => ['employees', 'EmployeeID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_orders_shippers' => ['type' => 'foreign', 'columns' => ['ShipperID'], 'references' => ['shippers', 'ShipperID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'OrderID' => 1,
                'CustomerID' => 1,
                'EmployeeID' => 1,
                'OrderDate' => '2018-12-10',
                'ShipperID' => 1
            ],
        ];
        parent::init();
    }
}
