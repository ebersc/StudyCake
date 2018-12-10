<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ShippersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ShippersTable Test Case
 */
class ShippersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ShippersTable
     */
    public $Shippers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.shippers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Shippers') ? [] : ['className' => ShippersTable::class];
        $this->Shippers = TableRegistry::getTableLocator()->get('Shippers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Shippers);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
