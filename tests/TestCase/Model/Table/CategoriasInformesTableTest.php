<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoriasInformesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoriasInformesTable Test Case
 */
class CategoriasInformesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CategoriasInformesTable
     */
    public $CategoriasInformes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::getTableLocator()->exists('CategoriasInformes') ? [] : ['className' => CategoriasInformesTable::class];
        $this->CategoriasInformes = TableRegistry::getTableLocator()->get('CategoriasInformes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CategoriasInformes);

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
