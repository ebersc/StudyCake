<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrderdetailsFixture
 *
 */
class OrderdetailsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'OrderDetailID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'OrderID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ProductID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Quantity' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FK_orderdetails_orders' => ['type' => 'index', 'columns' => ['OrderID'], 'length' => []],
            'FK_orderdetails_products' => ['type' => 'index', 'columns' => ['ProductID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['OrderDetailID'], 'length' => []],
            'FK_orderdetails_orders' => ['type' => 'foreign', 'columns' => ['OrderID'], 'references' => ['orders', 'OrderID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_orderdetails_products' => ['type' => 'foreign', 'columns' => ['ProductID'], 'references' => ['products', 'ProductID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'OrderDetailID' => 1,
                'OrderID' => 1,
                'ProductID' => 1,
                'Quantity' => 1
            ],
        ];
        parent::init();
    }
}
