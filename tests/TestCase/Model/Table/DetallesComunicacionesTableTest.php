<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DetallesComunicacionesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DetallesComunicacionesTable Test Case
 */
class DetallesComunicacionesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DetallesComunicacionesTable
     */
    public $DetallesComunicaciones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.DetallesComunicaciones',
        'app.Personas',
        'app.TiposComunicaciones',
        'app.TiposOrigenes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('DetallesComunicaciones') ? [] : ['className' => DetallesComunicacionesTable::class];
        $this->DetallesComunicaciones = TableRegistry::getTableLocator()->get('DetallesComunicaciones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DetallesComunicaciones);

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
