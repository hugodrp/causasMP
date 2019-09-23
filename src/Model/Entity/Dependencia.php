<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Dependencia Entity
 *
 * @property int $id
 * @property int $nro_dependencia
 * @property string $descripcion
 * @property string $abreviacion
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\DetallesCausa[] $detalles_causas
 */
class Dependencia extends Entity
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
        'nro_dependencia' => true,
        'descripcion' => true,
        'abreviacion' => true,
        'created' => true,
        'modified' => true,
        'detalles_causas' => true
    ];
}
