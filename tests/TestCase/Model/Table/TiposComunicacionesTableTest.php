<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TiposComunicacionesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TiposComunicacionesTable Test Case
 */
class TiposComunicacionesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TiposComunicacionesTable
     */
    public $TiposComunicaciones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.TiposComunicaciones'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TiposComunicaciones') ? [] : ['className' => TiposComunicacionesTable::class];
        $this->TiposComunicaciones = TableRegistry::getTableLocator()->get('TiposComunicaciones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TiposComunicaciones);

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
