<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FormasDePagamentos Model
 *
 * @property \App\Model\Table\ClientesTable&\Cake\ORM\Association\HasMany $Clientes
 *
 * @method \App\Model\Entity\FormasDePagamento get($primaryKey, $options = [])
 * @method \App\Model\Entity\FormasDePagamento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FormasDePagamento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FormasDePagamento|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FormasDePagamento saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FormasDePagamento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FormasDePagamento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FormasDePagamento findOrCreate($search, callable $callback = null, $options = [])
 */
class FormasDePagamentosTable extends Table
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

        $this->setTable('formas_de_pagamentos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Clientes', [
            'foreignKey' => 'formas_de_pagamento_id'
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
            ->scalar('tipo')
            ->maxLength('tipo', 45)
            ->requirePresence('tipo', 'create')
            ->notEmptyString('tipo');

        return $validator;
    }
}
