<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JurisdiccionesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JurisdiccionesTable Test Case
 */
class JurisdiccionesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\JurisdiccionesTable
     */
    public $Jurisdicciones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Jurisdicciones'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Jurisdicciones') ? [] : ['className' => JurisdiccionesTable::class];
        $this->Jurisdicciones = TableRegistry::getTableLocator()->get('Jurisdicciones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Jurisdicciones);

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
