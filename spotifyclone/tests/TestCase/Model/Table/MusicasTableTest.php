<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MusicasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MusicasTable Test Case
 */
class MusicasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MusicasTable
     */
    public $Musicas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::getTableLocator()->exists('Musicas') ? [] : ['className' => MusicasTable::class];
        $this->Musicas = TableRegistry::getTableLocator()->get('Musicas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Musicas);

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
