<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MusicasHasPlaylistsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MusicasHasPlaylistsTable Test Case
 */
class MusicasHasPlaylistsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MusicasHasPlaylistsTable
     */
    public $MusicasHasPlaylists;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.MusicasHasPlaylists',
        'app.Musicas',
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
        $config = TableRegistry::getTableLocator()->exists('MusicasHasPlaylists') ? [] : ['className' => MusicasHasPlaylistsTable::class];
        $this->MusicasHasPlaylists = TableRegistry::getTableLocator()->get('MusicasHasPlaylists', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MusicasHasPlaylists);

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
