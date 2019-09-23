<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TrabajosInformesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TrabajosInformesTable Test Case
 */
class TrabajosInformesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TrabajosInformesTable
     */
    public $TrabajosInformes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TrabajosInformes',
        'app.DetallesInformes',
        'app.TiposTrabajos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TrabajosInformes') ? [] : ['className' => TrabajosInformesTable::class];
        $this->TrabajosInformes = TableRegistry::getTableLocator()->get('TrabajosInformes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TrabajosInformes);

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
