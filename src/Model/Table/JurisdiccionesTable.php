<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Jurisdicciones Model
 *
 * @method \App\Model\Entity\Jurisdiccione get($primaryKey, $options = [])
 * @method \App\Model\Entity\Jurisdiccione newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Jurisdiccione[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Jurisdiccione|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Jurisdiccione saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Jurisdiccione patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Jurisdiccione[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Jurisdiccione findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class JurisdiccionesTable extends Table
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

        $this->setTable('jurisdicciones');
        $this->setDisplayField('descripcion');
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
            ->integer('nro_jurisdiccion')
            ->requirePresence('nro_jurisdiccion', 'create')
            ->notEmptyString('nro_jurisdiccion');

        $validator
            ->scalar('descripcion')
            ->requirePresence('descripcion', 'create')
            ->notEmptyString('descripcion');

        return $validator;
    }
}
