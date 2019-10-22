<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PlaylistsHasListasDeMusicasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PlaylistsHasListasDeMusicasTable Test Case
 */
class PlaylistsHasListasDeMusicasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PlaylistsHasListasDeMusicasTable
     */
    public $PlaylistsHasListasDeMusicas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PlaylistsHasListasDeMusicas',
        'app.ListasDeMusicas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PlaylistsHasListasDeMusicas') ? [] : ['className' => PlaylistsHasListasDeMusicasTable::class];
        $this->PlaylistsHasListasDeMusicas = TableRegistry::getTableLocator()->get('PlaylistsHasListasDeMusicas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PlaylistsHasListasDeMusicas);

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
