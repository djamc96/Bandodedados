<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Playlists Model
 *
 * @method \App\Model\Entity\Playlist get($primaryKey, $options = [])
 * @method \App\Model\Entity\Playlist newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Playlist[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Playlist|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Playlist saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Playlist patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Playlist[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Playlist findOrCreate($search, callable $callback = null, $options = [])
 */
class PlaylistsTable extends Table
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

        $this->setTable('playlists');
        $this->setDisplayField('idplaylists');
        $this->setPrimaryKey('idplaylists');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 45)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome');

        $validator
            ->integer('n_musicas')
            ->requirePresence('n_musicas', 'create')
            ->notEmptyString('n_musicas');

        $validator
            ->requirePresence('publica_privada', 'create')
            ->notEmptyString('publica_privada');

        $validator
            ->time('duracao')
            ->requirePresence('duracao', 'create')
            ->notEmptyTime('duracao');

        $validator
            ->integer('usuarios_id_usuario')
            ->requirePresence('usuarios_id_usuario', 'create')
            ->notEmptyString('usuarios_id_usuario');

        return $validator;
    }
}
