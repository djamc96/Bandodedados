<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PlaylistsHasListasDeMusicasFixture
 */
class PlaylistsHasListasDeMusicasFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'playlists_idplaylists' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'listas_de_musicas_musicas_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'listas_de_musicas_artistas_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_playlists_has_listas_de_musicas_listas_de_musicas1' => ['type' => 'index', 'columns' => ['listas_de_musicas_musicas_id', 'listas_de_musicas_artistas_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['playlists_idplaylists', 'listas_de_musicas_musicas_id', 'listas_de_musicas_artistas_id'], 'length' => []],
            'fk_playlists_has_listas_de_musicas_listas_de_musicas1' => ['type' => 'foreign', 'columns' => ['listas_de_musicas_musicas_id', 'listas_de_musicas_artistas_id'], 'references' => ['listas_de_musicas', '1' => ['musicas_id', 'artistas_id']], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_playlists_has_listas_de_musicas_playlists1' => ['type' => 'foreign', 'columns' => ['playlists_idplaylists'], 'references' => ['playlists', 'idplaylists'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
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
                'playlists_idplaylists' => 1,
                'listas_de_musicas_musicas_id' => 1,
                'listas_de_musicas_artistas_id' => 1
            ],
        ];
        parent::init();
    }
}
