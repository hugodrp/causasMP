<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DetallesComunicacionesFixture
 */
class DetallesComunicacionesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'informacion' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'fecha_registro' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'persona_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipo_comunicacion_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipo_origen_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'persona_id' => ['type' => 'index', 'columns' => ['persona_id'], 'length' => []],
            'tipo_comunicacion_id' => ['type' => 'index', 'columns' => ['tipo_comunicacion_id'], 'length' => []],
            'tipo_origen_id' => ['type' => 'index', 'columns' => ['tipo_origen_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'detalles_comunicaciones_ibfk_1' => ['type' => 'foreign', 'columns' => ['persona_id'], 'references' => ['personas', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'detalles_comunicaciones_ibfk_2' => ['type' => 'foreign', 'columns' => ['tipo_comunicacion_id'], 'references' => ['tipos_comunicaciones', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'detalles_comunicaciones_ibfk_3' => ['type' => 'foreign', 'columns' => ['tipo_origen_id'], 'references' => ['tipos_origenes', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_spanish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'informacion' => 'Lorem ipsum dolor sit amet',
                'fecha_registro' => '2019-09-23',
                'created' => '2019-09-23 16:54:14',
                'modified' => '2019-09-23 16:54:14',
                'persona_id' => 1,
                'tipo_comunicacion_id' => 1,
                'tipo_origen_id' => 1
            ],
        ];
        parent::init();
    }
}
