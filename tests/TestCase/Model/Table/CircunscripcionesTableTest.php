<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CircunscripcionesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CircunscripcionesTable Test Case
 */
class CircunscripcionesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CircunscripcionesTable
     */
    public $Circunscripciones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Circunscripciones'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Circunscripciones') ? [] : ['className' => CircunscripcionesTable::class];
        $this->Circunscripciones = TableRegistry::getTableLocator()->get('Circunscripciones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Circunscripciones);

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
