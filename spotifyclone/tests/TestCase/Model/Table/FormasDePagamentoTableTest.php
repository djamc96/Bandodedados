<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FormasDePagamentoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FormasDePagamentoTable Test Case
 */
class FormasDePagamentoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FormasDePagamentoTable
     */
    public $FormasDePagamento;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.FormasDePagamento'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('FormasDePagamento') ? [] : ['className' => FormasDePagamentoTable::class];
        $this->FormasDePagamento = TableRegistry::getTableLocator()->get('FormasDePagamento', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FormasDePagamento);

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
