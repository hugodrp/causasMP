<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TiposComunicaciones Model
 *
 * @method \App\Model\Entity\TiposComunicacione get($primaryKey, $options = [])
 * @method \App\Model\Entity\TiposComunicacione newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TiposComunicacione[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TiposComunicacione|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TiposComunicacione saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TiposComunicacione patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TiposComunicacione[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TiposComunicacione findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TiposComunicacionesTable extends Table
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

        $this->setTable('tipos_comunicaciones');
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
            ->scalar('tipo_comunicacion')
            ->maxLength('tipo_comunicacion', 255)
            ->requirePresence('tipo_comunicacion', 'create')
            ->notEmptyString('tipo_comunicacion');

        return $validator;
    }
}
