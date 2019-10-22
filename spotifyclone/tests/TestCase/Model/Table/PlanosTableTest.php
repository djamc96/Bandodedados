<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PlanosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PlanosTable Test Case
 */
class PlanosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PlanosTable
     */
    public $Planos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Planos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Planos') ? [] : ['className' => PlanosTable::class];
        $this->Planos = TableRegistry::getTableLocator()->get('Planos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Planos);

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
