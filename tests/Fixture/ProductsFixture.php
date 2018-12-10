<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductsFixture
 *
 */
class ProductsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'ProductID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'ProductName' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'SupplierID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'CategoryID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Unit' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Price' => ['type' => 'decimal', 'length' => 10, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        '_indexes' => [
            'FK_products_suppliers' => ['type' => 'index', 'columns' => ['SupplierID'], 'length' => []],
            'FK_products_categories' => ['type' => 'index', 'columns' => ['CategoryID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['ProductID'], 'length' => []],
            'FK_products_categories' => ['type' => 'foreign', 'columns' => ['CategoryID'], 'references' => ['categories', 'CategoryID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'FK_products_suppliers' => ['type' => 'foreign', 'columns' => ['SupplierID'], 'references' => ['suppliers', 'SupplierID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'ProductID' => 1,
                'ProductName' => 'Lorem ipsum dolor sit amet',
                'SupplierID' => 1,
                'CategoryID' => 1,
                'Unit' => 'Lorem ipsum dolor sit amet',
                'Price' => 1.5
            ],
        ];
        parent::init();
    }
}
