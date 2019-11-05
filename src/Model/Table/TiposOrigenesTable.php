<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TiposOrigenes Model
 *
 * @method \App\Model\Entity\TiposOrigene get($primaryKey, $options = [])
 * @method \App\Model\Entity\TiposOrigene newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TiposOrigene[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TiposOrigene|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TiposOrigene saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TiposOrigene patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TiposOrigene[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TiposOrigene findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TiposOrigenesTable extends Table
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

        $this->setTable('tipos_origenes');
        $this->setDisplayField('tipo_origen');
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
            ->scalar('tipo_origen')
            ->maxLength('tipo_origen', 255)
            ->requirePresence('tipo_origen', 'create')
            ->notEmptyString('tipo_origen');

        return $validator;
    }
}
