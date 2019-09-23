<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DetallesCausasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DetallesCausasTable Test Case
 */
class DetallesCausasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DetallesCausasTable
     */
    public $DetallesCausas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.DetallesCausas',
        'app.Circunscripciones',
        'app.Jurisdicciones',
        'app.Origenes',
        'app.Dependencias',
        'app.HechosPunibles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('DetallesCausas') ? [] : ['className' => DetallesCausasTable::class];
        $this->DetallesCausas = TableRegistry::getTableLocator()->get('DetallesCausas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DetallesCausas);

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
