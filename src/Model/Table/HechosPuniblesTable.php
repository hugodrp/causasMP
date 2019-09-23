<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HechosPunibles Model
 *
 * @method \App\Model\Entity\HechosPunible get($primaryKey, $options = [])
 * @method \App\Model\Entity\HechosPunible newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HechosPunible[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HechosPunible|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HechosPunible saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HechosPunible patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HechosPunible[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HechosPunible findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class HechosPuniblesTable extends Table
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

        $this->setTable('hechos_punibles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('articulo')
            ->maxLength('articulo', 255)
            ->requirePresence('articulo', 'create')
            ->notEmptyString('articulo');

        $validator
            ->scalar('titulo')
            ->maxLength('titulo', 255)
            ->requirePresence('titulo', 'create')
            ->notEmptyString('titulo');

        $validator
            ->scalar('detalle')
            ->requirePresence('detalle', 'create')
            ->notEmptyString('detalle');

        return $validator;
    }
}
