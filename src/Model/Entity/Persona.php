<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Persona Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellido
 * @property string $cic
 * @property string $funcionario
 * @property string $fiscal
 * @property string $fecha_nacimiento
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\DetallesComunicacione[] $detalles_comunicaciones
 * @property \App\Model\Entity\DetallesInforme[] $detalles_informes
 */
class Persona extends Entity
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
        'nombre' => true,
        'apellido' => true,
        'cic' => true,
        'funcionario' => true,
        'fiscal' => true,
        'fecha_nacimiento' => true,
        'created' => true,
        'modified' => true,
        'detalles_comunicaciones' => true,
        'detalles_informes' => true
    ];

    // Concatenar nombre y apellido en un mismo campo para mostrar (ver PersonasController)
    protected function _getName()
    {
        return $this->_properties['nombre'] . ' ' . $this->_properties['apellido'];
    }
}
