<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Causas Model
 *
 * @property \App\Model\Table\CircunscripcionesTable&\Cake\ORM\Association\BelongsTo $Circunscripciones
 * @property \App\Model\Table\JurisdiccionesTable&\Cake\ORM\Association\BelongsTo $Jurisdicciones
 * @property \App\Model\Table\OrigenesTable&\Cake\ORM\Association\BelongsTo $Origenes
 * @property \App\Model\Table\DependenciasTable&\Cake\ORM\Association\BelongsTo $Dependencias
 * @property \App\Model\Table\HechosPuniblesTable&\Cake\ORM\Association\BelongsTo $HechosPunibles
 *
 * @method \App\Model\Entity\Causa get($primaryKey, $options = [])
 * @method \App\Model\Entity\Causa newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Causa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Causa|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Causa saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Causa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Causa[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Causa findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CausasTable extends Table
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

        $this->setTable('causas');
        $this->setDisplayField('descripcion');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Circunscripciones', [
            'foreignKey' => 'circunscripcion_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Jurisdicciones', [
            'foreignKey' => 'jurisdiccion_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Origenes', [
            'foreignKey' => 'origen_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Dependencias', [
            'foreignKey' => 'dependencia_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('HechosPunibles', [
            'foreignKey' => 'hecho_punible_id',
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
            ->integer('anho')
            ->requirePresence('anho', 'create')
            ->notEmptyString('anho');

        $validator
            ->integer('nro_entrada')
            ->requirePresence('nro_entrada', 'create')
            ->notEmptyString('nro_entrada');

        $validator
            ->scalar('caratula')
            ->maxLength('caratula', 255)
            ->requirePresence('caratula', 'create')
            ->notEmptyString('caratula');

        $validator
            ->scalar('unidad_fiscal')
            ->maxLength('unidad_fiscal', 15)
            ->requirePresence('unidad_fiscal', 'create')
            ->notEmptyString('unidad_fiscal');

        $validator
            ->scalar('resultado')
            ->requirePresence('resultado', 'create')
            ->notEmptyString('resultado');

        $validator
            ->integer('tiempo_resultado')
            ->requirePresence('tiempo_resultado', 'create')
            ->notEmptyString('tiempo_resultado');

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
        $rules->add($rules->existsIn(['circunscripcion_id'], 'Circunscripciones'));
        $rules->add($rules->existsIn(['jurisdiccion_id'], 'Jurisdicciones'));
        $rules->add($rules->existsIn(['origen_id'], 'Origenes'));
        $rules->add($rules->existsIn(['dependencia_id'], 'Dependencias'));
        $rules->add($rules->existsIn(['hecho_punible_id'], 'HechosPunibles'));

        return $rules;
    }
}
