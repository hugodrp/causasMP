<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CausasFixture
 */
class CausasFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'anho' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'nro_entrada' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'caratula' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'unidad_fiscal' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'resultado' => ['type' => 'string', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'tiempo_resultado' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'circunscripcion_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'jurisdiccion_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'origen_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'dependencia_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'hecho_punible_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'circunscripcion_id' => ['type' => 'index', 'columns' => ['circunscripcion_id'], 'length' => []],
            'jurisdiccion_id' => ['type' => 'index', 'columns' => ['jurisdiccion_id'], 'length' => []],
            'origen_id' => ['type' => 'index', 'columns' => ['origen_id'], 'length' => []],
            'dependencia_id' => ['type' => 'index', 'columns' => ['dependencia_id'], 'length' => []],
            'hecho_punible_id' => ['type' => 'index', 'columns' => ['hecho_punible_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'causas_ibfk_1' => ['type' => 'foreign', 'columns' => ['circunscripcion_id'], 'references' => ['circunscripciones', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'causas_ibfk_2' => ['type' => 'foreign', 'columns' => ['jurisdiccion_id'], 'references' => ['jurisdicciones', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'causas_ibfk_3' => ['type' => 'foreign', 'columns' => ['origen_id'], 'references' => ['origenes', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'causas_ibfk_4' => ['type' => 'foreign', 'columns' => ['dependencia_id'], 'references' => ['dependencias', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'causas_ibfk_5' => ['type' => 'foreign', 'columns' => ['hecho_punible_id'], 'references' => ['hechos_punibles', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
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
                'anho' => 1,
                'nro_entrada' => 1,
                'caratula' => 'Lorem ipsum dolor sit amet',
                'unidad_fiscal' => 'Lorem ipsum d',
                'resultado' => 'Lorem ipsum dolor sit amet',
                'tiempo_resultado' => 1,
                'created' => '2019-12-09 12:13:00',
                'modified' => '2019-12-09 12:13:00',
                'circunscripcion_id' => 1,
                'jurisdiccion_id' => 1,
                'origen_id' => 1,
                'dependencia_id' => 1,
                'hecho_punible_id' => 1
            ],
        ];
        parent::init();
    }
}
