<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HechosPuniblesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HechosPuniblesTable Test Case
 */
class HechosPuniblesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HechosPuniblesTable
     */
    public $HechosPunibles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::getTableLocator()->exists('HechosPunibles') ? [] : ['className' => HechosPuniblesTable::class];
        $this->HechosPunibles = TableRegistry::getTableLocator()->get('HechosPunibles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HechosPunibles);

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
