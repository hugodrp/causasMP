<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Jurisdiccione Entity
 *
 * @property int $id
 * @property int $nro_jurisdiccion
 * @property string $descripcion
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Jurisdiccione extends Entity
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
        'nro_jurisdiccion' => true,
        'descripcion' => true,
        'created' => true,
        'modified' => true
    ];
}
