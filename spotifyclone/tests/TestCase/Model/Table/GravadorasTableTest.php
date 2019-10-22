<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GravadorasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GravadorasTable Test Case
 */
class GravadorasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GravadorasTable
     */
    public $Gravadoras;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Gravadoras'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Gravadoras') ? [] : ['className' => GravadorasTable::class];
        $this->Gravadoras = TableRegistry::getTableLocator()->get('Gravadoras', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Gravadoras);

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
