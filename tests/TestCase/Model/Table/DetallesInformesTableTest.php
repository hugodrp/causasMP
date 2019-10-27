<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DetallesInformesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DetallesInformesTable Test Case
 */
class DetallesInformesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DetallesInformesTable
     */
    public $DetallesInformes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.DetallesInformes',
        'app.DetallesCausas',
        'app.Personas',
        'app.CategoriasInformes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('DetallesInformes') ? [] : ['className' => DetallesInformesTable::class];
        $this->DetallesInformes = TableRegistry::getTableLocator()->get('DetallesInformes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DetallesInformes);

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
