<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DetallesInforme Entity
 *
 * @property int $id
 * @property int $nro_nota_recibida
 * @property \Cake\I18n\FrozenDate $fecha_nota_recibida
 * @property \Cake\I18n\FrozenDate $fecha_asignacion
 * @property \Cake\I18n\FrozenDate $fecha_inicio_informe
 * @property string $nro_informe_entrega
 * @property string $nro_nota_entrega
 * @property \Cake\I18n\FrozenDate $feha_entrega_informe
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $detalle_causa_id
 * @property int $persona_id
 * @property int $categoria_informe_id
 *
 * @property \App\Model\Entity\DetallesCausa $detalles_causa
 * @property \App\Model\Entity\Persona $persona
 * @property \App\Model\Entity\CategoriasInforme $categorias_informe
 */
class DetallesInforme extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nro_nota_recibida' => true,
        'fecha_nota_recibida' => true,
        'fecha_asignacion' => true,
        'fecha_inicio_informe' => true,
        'nro_informe_entrega' => true,
        'nro_nota_entrega' => true,
        'feha_entrega_informe' => true,
        'created' => true,
        'modified' => true,
        'detalle_causa_id' => true,
        'persona_id' => true,
        'categoria_informe_id' => true,
        'detalles_causa' => true,
        'persona' => true,
        'categorias_informe' => true
    ];
}
