<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MusicasHasPlaylists Model
 *
 * @property \App\Model\Table\MusicasTable&\Cake\ORM\Association\BelongsTo $Musicas
 * @property \App\Model\Table\MusicasTable&\Cake\ORM\Association\BelongsTo $Musicas
 * @property \App\Model\Table\PlaylistsTable&\Cake\ORM\Association\BelongsTo $Playlists
 *
 * @method \App\Model\Entity\MusicasHasPlaylist get($primaryKey, $options = [])
 * @method \App\Model\Entity\MusicasHasPlaylist newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MusicasHasPlaylist[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MusicasHasPlaylist|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MusicasHasPlaylist saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MusicasHasPlaylist patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MusicasHasPlaylist[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MusicasHasPlaylist findOrCreate($search, callable $callback = null, $options = [])
 */
class MusicasHasPlaylistsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('musicas_has_playlists');
        $this->setDisplayField('musicas_id');
        $this->setPrimaryKey(['musicas_id', 'musicas_artistas_id', 'playlists_id']);

        $this->belongsTo('Musicas', [
            'foreignKey' => 'musicas_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Musicas', [
            'foreignKey' => 'musicas_artistas_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Playlists', [
            'foreignKey' => 'playlists_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['musicas_id'], 'Musicas'));
        $rules->add($rules->existsIn(['musicas_artistas_id'], 'Musicas'));
        $rules->add($rules->existsIn(['playlists_id'], 'Playlists'));

        return $rules;
    }
}
