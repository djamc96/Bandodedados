<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ListasDeMusicasFixture
 */
class ListasDeMusicasFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'musicas_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'artistas_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_musicas_has_artistas_artistas1' => ['type' => 'index', 'columns' => ['artistas_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['musicas_id', 'artistas_id'], 'length' => []],
            'fk_musicas_has_artistas_artistas1' => ['type' => 'foreign', 'columns' => ['artistas_id'], 'references' => ['artistas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_musicas_has_artistas_musicas' => ['type' => 'foreign', 'columns' => ['musicas_id'], 'references' => ['musicas', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'musicas_id' => 1,
                'artistas_id' => 1
            ],
        ];
        parent::init();
    }
}
