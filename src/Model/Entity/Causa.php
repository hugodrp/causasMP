<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Causa Entity
 *
 * @property int $id
 * @property int $anho
 * @property int $nro_entrada
 * @property string $caratula
 * @property string $unidad_fiscal
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $dependencia_id
 * @property int $origen_id
 * @property int $jurisdiccion_id
 * @property int $circunscripcion_id
 * @property int $hecho_punible_id
 *
 * @property \App\Model\Entity\Dependencia $dependencia
 * @property \App\Model\Entity\Origene $origene
 * @property \App\Model\Entity\Jurisdiccione $jurisdiccione
 * @property \App\Model\Entity\Circunscripcione $circunscripcione
 * @property \App\Model\Entity\HechosPunible $hechos_punible
 */
class Causa extends Entity
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
        'anho' => true,
        'nro_entrada' => true,
        'caratula' => true,
        'unidad_fiscal' => true,
        'created' => true,
        'modified' => true,
        'dependencia_id' => true,
        'origen_id' => true,
        'jurisdiccion_id' => true,
        'circunscripcion_id' => true,
        'hecho_punible_id' => true,
        'dependencia' => true,
        'origene' => true,
        'jurisdiccione' => true,
        'circunscripcione' => true,
        'hechos_punible' => true
    ];
}
