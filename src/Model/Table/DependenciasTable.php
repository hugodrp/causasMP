<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dependencias Model
 *
 * @property \App\Model\Table\DetallesCausasTable&\Cake\ORM\Association\HasMany $DetallesCausas
 *
 * @method \App\Model\Entity\Dependencia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Dependencia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Dependencia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dependencia|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dependencia saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dependencia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Dependencia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dependencia findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DependenciasTable extends Table
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

        $this->setTable('dependencias');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('DetallesCausas', [
            'foreignKey' => 'dependencia_id'
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
            ->integer('nro_dependencia')
            ->requirePresence('nro_dependencia', 'create')
            ->notEmptyString('nro_dependencia');

        $validator
            ->scalar('descripcion')
            ->requirePresence('descripcion', 'create')
            ->notEmptyString('descripcion');

        $validator
            ->scalar('abreviacion')
            ->maxLength('abreviacion', 255)
            ->requirePresence('abreviacion', 'create')
            ->notEmptyString('abreviacion');

        return $validator;
    }
}
