<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TrabajosInformes Model
 *
 * @property \App\Model\Table\DetallesInformesTable&\Cake\ORM\Association\BelongsTo $DetallesInformes
 * @property \App\Model\Table\TiposTrabajosTable&\Cake\ORM\Association\BelongsTo $TiposTrabajos
 *
 * @method \App\Model\Entity\TrabajosInforme get($primaryKey, $options = [])
 * @method \App\Model\Entity\TrabajosInforme newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TrabajosInforme[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TrabajosInforme|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrabajosInforme saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrabajosInforme patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TrabajosInforme[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TrabajosInforme findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TrabajosInformesTable extends Table
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

        $this->setTable('trabajos_informes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('DetallesInformes', [
            'foreignKey' => 'detalle_informe_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('TiposTrabajos', [
            'foreignKey' => 'tipo_trabajo_id',
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
            ->scalar('observacion')
            ->requirePresence('observacion', 'create')
            ->notEmptyString('observacion');

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
        $rules->add($rules->existsIn(['detalle_informe_id'], 'DetallesInformes'));
        $rules->add($rules->existsIn(['tipo_trabajo_id'], 'TiposTrabajos'));

        return $rules;
    }
}
