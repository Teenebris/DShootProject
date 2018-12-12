<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WeaponsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WeaponsTable Test Case
 */
class WeaponsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WeaponsTable
     */
    public $Weapons;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.weapons'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Weapons') ? [] : ['className' => WeaponsTable::class];
        $this->Weapons = TableRegistry::getTableLocator()->get('Weapons', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Weapons);

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
