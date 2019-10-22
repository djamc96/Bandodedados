<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Gravadoras Model
 *
 * @method \App\Model\Entity\Gravadora get($primaryKey, $options = [])
 * @method \App\Model\Entity\Gravadora newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Gravadora[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Gravadora|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gravadora saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gravadora patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Gravadora[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Gravadora findOrCreate($search, callable $callback = null, $options = [])
 */
class GravadorasTable extends Table
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

        $this->setTable('gravadoras');
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
            ->scalar('nome_gravadora')
            ->maxLength('nome_gravadora', 45)
            ->requirePresence('nome_gravadora', 'create')
            ->notEmptyString('nome_gravadora');

        $validator
            ->decimal('valor')
            ->requirePresence('valor', 'create')
            ->notEmptyString('valor');

        $validator
            ->date('validade_contrato')
            ->allowEmptyDate('validade_contrato');

        return $validator;
    }
}
