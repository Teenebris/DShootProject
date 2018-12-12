<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ShootsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ShootsTable Test Case
 */
class ShootsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ShootsTable
     */
    public $Shoots;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.shoots'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Shoots') ? [] : ['className' => ShootsTable::class];
        $this->Shoots = TableRegistry::getTableLocator()->get('Shoots', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Shoots);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
