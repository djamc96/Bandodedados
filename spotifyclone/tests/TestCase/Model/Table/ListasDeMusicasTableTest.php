<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ListasDeMusicasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ListasDeMusicasTable Test Case
 */
class ListasDeMusicasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ListasDeMusicasTable
     */
    public $ListasDeMusicas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ListasDeMusicas',
        'app.Musicas',
        'app.Artistas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ListasDeMusicas') ? [] : ['className' => ListasDeMusicasTable::class];
        $this->ListasDeMusicas = TableRegistry::getTableLocator()->get('ListasDeMusicas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ListasDeMusicas);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
