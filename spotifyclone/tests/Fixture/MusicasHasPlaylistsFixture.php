<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MusicasHasPlaylistsFixture
 */
class MusicasHasPlaylistsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'musicas_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'musicas_artistas_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'playlists_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_musicas_has_playlists_playlists1_idx' => ['type' => 'index', 'columns' => ['playlists_id'], 'length' => []],
            'fk_musicas_has_playlists_musicas1_idx' => ['type' => 'index', 'columns' => ['musicas_id', 'musicas_artistas_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['musicas_id', 'musicas_artistas_id', 'playlists_id'], 'length' => []],
            'fk_musicas_has_playlists_musicas1' => ['type' => 'foreign', 'columns' => ['musicas_id', 'musicas_artistas_id'], 'references' => ['musicas', '1' => ['id', 'artistas_id']], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_musicas_has_playlists_playlists1' => ['type' => 'foreign', 'columns' => ['playlists_id'], 'references' => ['playlists', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'musicas_id' => 1,
                'musicas_artistas_id' => 1,
                'playlists_id' => 1
            ],
        ];
        parent::init();
    }
}
