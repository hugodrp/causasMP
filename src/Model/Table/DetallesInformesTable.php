<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DetallesInformes Model
 *
 * @property \App\Model\Table\DetallesCausasTable&\Cake\ORM\Association\BelongsTo $DetallesCausas
 * @property \App\Model\Table\PersonasTable&\Cake\ORM\Association\BelongsTo $Personas
 * @property \App\Model\Table\CategoriasInformesTable&\Cake\ORM\Association\BelongsTo $CategoriasInformes
 *
 * @method \App\Model\Entity\DetallesInforme get($primaryKey, $options = [])
 * @method \App\Model\Entity\DetallesInforme newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DetallesInforme[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DetallesInforme|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DetallesInforme saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DetallesInforme patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DetallesInforme[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DetallesInforme findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DetallesInformesTable extends Table
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

        $this->setTable('detalles_informes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('DetallesCausas', [
            'foreignKey' => 'detalle_causa_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Personas', [
            'foreignKey' => 'persona_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('CategoriasInformes', [
            'foreignKey' => 'categoria_informe_id',
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
            ->integer('nro_nota_recibida')
            ->requirePresence('nro_nota_recibida', 'create')
            ->notEmptyString('nro_nota_recibida');

        $validator
            ->date('fecha_nota_recibida')
            ->requirePresence('fecha_nota_recibida', 'create')
            ->notEmptyDate('fecha_nota_recibida');

        $validator
            ->date('fecha_asignacion')
            ->requirePresence('fecha_asignacion', 'create')
            ->notEmptyDate('fecha_asignacion');

        $validator
            ->date('fecha_inicio_informe')
            ->requirePresence('fecha_inicio_informe', 'create')
            ->notEmptyDate('fecha_inicio_informe');

        $validator
            ->scalar('nro_informe_entrega')
            ->requirePresence('nro_informe_entrega', 'create')
            ->notEmptyString('nro_informe_entrega');

        $validator
            ->scalar('nro_nota_entrega')
            ->requirePresence('nro_nota_entrega', 'create')
            ->notEmptyString('nro_nota_entrega');

        $validator
            ->date('feha_entrega_informe')
            ->requirePresence('feha_entrega_informe', 'create')
            ->notEmptyDate('feha_entrega_informe');

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
        $rules->add($rules->existsIn(['detalle_causa_id'], 'DetallesCausas'));
        $rules->add($rules->existsIn(['persona_id'], 'Personas'));
        $rules->add($rules->existsIn(['categoria_informe_id'], 'CategoriasInformes'));

        return $rules;
    }
}
