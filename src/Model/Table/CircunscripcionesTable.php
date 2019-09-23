<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Circunscripciones Model
 *
 * @method \App\Model\Entity\Circunscripcione get($primaryKey, $options = [])
 * @method \App\Model\Entity\Circunscripcione newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Circunscripcione[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Circunscripcione|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Circunscripcione saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Circunscripcione patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Circunscripcione[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Circunscripcione findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CircunscripcionesTable extends Table
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

        $this->setTable('circunscripciones');
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
            ->scalar('circunscripcion')
            ->maxLength('circunscripcion', 255)
            ->requirePresence('circunscripcion', 'create')
            ->notEmptyString('circunscripcion');

        return $validator;
    }
}
