<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TrabajosInformesFixture
 */
class TrabajosInformesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'observacion' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'detalle_informe_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipo_trabajo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'detalle_informe_id' => ['type' => 'index', 'columns' => ['detalle_informe_id'], 'length' => []],
            'tipo_trabajo_id' => ['type' => 'index', 'columns' => ['tipo_trabajo_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'trabajos_informes_ibfk_1' => ['type' => 'foreign', 'columns' => ['detalle_informe_id'], 'references' => ['detalles_informes', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'trabajos_informes_ibfk_2' => ['type' => 'foreign', 'columns' => ['tipo_trabajo_id'], 'references' => ['tipos_trabajos', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
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
                'observacion' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'created' => '2019-10-02 14:50:42',
                'modified' => '2019-10-02 14:50:42',
                'detalle_informe_id' => 1,
                'tipo_trabajo_id' => 1
            ],
        ];
        parent::init();
    }
}
