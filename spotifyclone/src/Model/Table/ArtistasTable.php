<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Artistas Model
 *
 * @property \App\Model\Table\GravadorasTable&\Cake\ORM\Association\BelongsTo $Gravadoras
 *
 * @method \App\Model\Entity\Artista get($primaryKey, $options = [])
 * @method \App\Model\Entity\Artista newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Artista[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Artista|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Artista saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Artista patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Artista[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Artista findOrCreate($search, callable $callback = null, $options = [])
 */
class ArtistasTable extends Table
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

        $this->setTable('artistas');
        $this->setDisplayField('nome_gravadora');
        $this->setPrimaryKey('id');

        $this->belongsTo('Gravadoras', [
            'foreignKey' => 'gravadoras_id',
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
            ->scalar('nome_artista')
            ->maxLength('nome_artista', 45)
            ->requirePresence('nome_artista', 'create')
            ->notEmptyString('nome_artista');

        $validator
            ->scalar('pais')
            ->maxLength('pais', 45)
            ->allowEmptyString('pais');

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
        $rules->add($rules->existsIn(['gravadoras_id'], 'Gravadoras'));

        return $rules;
    }
}
