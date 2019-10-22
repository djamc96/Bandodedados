<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Musicas Model
 *
 * @property \App\Model\Table\ArtistasTable&\Cake\ORM\Association\BelongsTo $Artistas
 *
 * @method \App\Model\Entity\Musica get($primaryKey, $options = [])
 * @method \App\Model\Entity\Musica newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Musica[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Musica|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Musica saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Musica patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Musica[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Musica findOrCreate($search, callable $callback = null, $options = [])
 */
class MusicasTable extends Table
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

        $this->setTable('musicas');
        $this->setDisplayField('id');
        $this->setPrimaryKey(['id', 'artistas_id']);

        $this->belongsTo('Artistas', [
            'foreignKey' => 'artistas_id',
            'joinType' => 'INNER'
        ]);
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
            ->scalar('nome_musica')
            ->maxLength('nome_musica', 45)
            ->requirePresence('nome_musica', 'create')
            ->notEmptyString('nome_musica');

        $validator
            ->scalar('genero')
            ->maxLength('genero', 45)
            ->requirePresence('genero', 'create')
            ->notEmptyString('genero');

        $validator
            ->time('duracao')
            ->requirePresence('duracao', 'create')
            ->notEmptyTime('duracao');

        $validator
            ->scalar('link')
            ->maxLength('link', 45)
            ->allowEmptyString('link');

        return $validator;
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
        $rules->add($rules->existsIn(['artistas_id'], 'Artistas'));

        return $rules;
    }
}
