<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TiposOrigenesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TiposOrigenesTable Test Case
 */
class TiposOrigenesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TiposOrigenesTable
     */
    public $TiposOrigenes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::getTableLocator()->exists('TiposOrigenes') ? [] : ['className' => TiposOrigenesTable::class];
        $this->TiposOrigenes = TableRegistry::getTableLocator()->get('TiposOrigenes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TiposOrigenes);

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
