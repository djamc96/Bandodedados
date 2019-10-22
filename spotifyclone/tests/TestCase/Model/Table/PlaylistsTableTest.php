<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PlaylistsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PlaylistsTable Test Case
 */
class PlaylistsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PlaylistsTable
     */
    public $Playlists;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Playlists'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Playlists') ? [] : ['className' => PlaylistsTable::class];
        $this->Playlists = TableRegistry::getTableLocator()->get('Playlists', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Playlists);

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
