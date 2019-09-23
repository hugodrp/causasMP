<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TrabajosInforme Entity
 *
 * @property int $id
 * @property string $observacion
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $detalle_informe_id
 * @property int $tipo_trabajo_id
 *
 * @property \App\Model\Entity\DetallesInforme $detalles_informe
 * @property \App\Model\Entity\TiposTrabajo $tipos_trabajo
 */
class TrabajosInforme extends Entity
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
        'observacion' => true,
        'created' => true,
        'modified' => true,
        'detalle_informe_id' => true,
        'tipo_trabajo_id' => true,
        'detalles_informe' => true,
        'tipos_trabajo' => true
    ];
}
