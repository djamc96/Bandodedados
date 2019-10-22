<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Planos Model
 *
 * @method \App\Model\Entity\Plano get($primaryKey, $options = [])
 * @method \App\Model\Entity\Plano newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Plano[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Plano|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Plano saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Plano patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Plano[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Plano findOrCreate($search, callable $callback = null, $options = [])
 */
class PlanosTable extends Table
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

        $this->setTable('planos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->numeric('preco')
            ->requirePresence('preco', 'create')
            ->notEmptyString('preco');

        $validator
            ->integer('n_musicas_por_mes')
            ->allowEmptyString('n_musicas_por_mes');

        $validator
            ->date('validade_plano')
            ->allowEmptyDate('validade_plano');

        return $validator;
    }
}
