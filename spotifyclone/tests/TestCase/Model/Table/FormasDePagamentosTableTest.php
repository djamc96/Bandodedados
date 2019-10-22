<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FormasDePagamentosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FormasDePagamentosTable Test Case
 */
class FormasDePagamentosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FormasDePagamentosTable
     */
    public $FormasDePagamentos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.FormasDePagamentos',
        'app.Clientes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('FormasDePagamentos') ? [] : ['className' => FormasDePagamentosTable::class];
        $this->FormasDePagamentos = TableRegistry::getTableLocator()->get('FormasDePagamentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FormasDePagamentos);

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
