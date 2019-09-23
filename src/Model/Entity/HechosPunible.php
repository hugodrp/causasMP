<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HechosPunible Entity
 *
 * @property int $id
 * @property string $articulo
 * @property string $titulo
 * @property string $detalle
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class HechosPunible extends Entity
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
        'articulo' => true,
        'titulo' => true,
        'detalle' => true,
        'created' => true,
        'modified' => true
    ];
}
