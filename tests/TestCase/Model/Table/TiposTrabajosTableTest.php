<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TiposTrabajosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TiposTrabajosTable Test Case
 */
class TiposTrabajosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TiposTrabajosTable
     */
    public $TiposTrabajos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::getTableLocator()->exists('TiposTrabajos') ? [] : ['className' => TiposTrabajosTable::class];
        $this->TiposTrabajos = TableRegistry::getTableLocator()->get('TiposTrabajos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TiposTrabajos);

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
