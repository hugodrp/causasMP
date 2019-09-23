<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DetallesComunicaciones Model
 *
 * @property \App\Model\Table\PersonasTable&\Cake\ORM\Association\BelongsTo $Personas
 * @property \App\Model\Table\TiposComunicacionesTable&\Cake\ORM\Association\BelongsTo $TiposComunicaciones
 * @property \App\Model\Table\TiposOrigenesTable&\Cake\ORM\Association\BelongsTo $TiposOrigenes
 *
 * @method \App\Model\Entity\DetallesComunicacione get($primaryKey, $options = [])
 * @method \App\Model\Entity\DetallesComunicacione newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DetallesComunicacione[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DetallesComunicacione|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DetallesComunicacione saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DetallesComunicacione patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DetallesComunicacione[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DetallesComunicacione findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DetallesComunicacionesTable extends Table
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

        $this->setTable('detalles_comunicaciones');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Personas', [
            'foreignKey' => 'persona_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('TiposComunicaciones', [
            'foreignKey' => 'tipo_comunicacion_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('TiposOrigenes', [
            'foreignKey' => 'tipo_origen_id',
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
            ->scalar('informacion')
            ->maxLength('informacion', 255)
            ->requirePresence('informacion', 'create')
            ->notEmptyString('informacion');

        $validator
            ->date('fecha_registro')
            ->requirePresence('fecha_registro', 'create')
            ->notEmptyDate('fecha_registro');

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
        $rules->add($rules->existsIn(['persona_id'], 'Personas'));
        $rules->add($rules->existsIn(['tipo_comunicacion_id'], 'TiposComunicaciones'));
        $rules->add($rules->existsIn(['tipo_origen_id'], 'TiposOrigenes'));

        return $rules;
    }
}
