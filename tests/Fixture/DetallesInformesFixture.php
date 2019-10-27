<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DetallesInformesFixture
 */
class DetallesInformesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nro_nota_recibida' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fecha_nota_recibida' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'fecha_asignacion' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'fecha_inicio_informe' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'nro_informe_entrega' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'nro_nota_entrega' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null],
        'feha_entrega_informe' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'detalle_causa_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'persona_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'categoria_informe_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'detalle_causa_id' => ['type' => 'index', 'columns' => ['detalle_causa_id'], 'length' => []],
            'persona_id' => ['type' => 'index', 'columns' => ['persona_id'], 'length' => []],
            'categoria_informe_id' => ['type' => 'index', 'columns' => ['categoria_informe_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'detalles_informes_ibfk_1' => ['type' => 'foreign', 'columns' => ['detalle_causa_id'], 'references' => ['detalles_causas', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'detalles_informes_ibfk_2' => ['type' => 'foreign', 'columns' => ['persona_id'], 'references' => ['personas', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'detalles_informes_ibfk_3' => ['type' => 'foreign', 'columns' => ['categoria_informe_id'], 'references' => ['categorias_informes', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
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
                'nro_nota_recibida' => 1,
                'fecha_nota_recibida' => '2019-10-02',
                'fecha_asignacion' => '2019-10-02',
                'fecha_inicio_informe' => '2019-10-02',
                'nro_informe_entrega' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'nro_nota_entrega' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'feha_entrega_informe' => '2019-10-02',
                'created' => '2019-10-02 14:55:10',
                'modified' => '2019-10-02 14:55:10',
                'detalle_causa_id' => 1,
                'persona_id' => 1,
                'categoria_informe_id' => 1
            ],
        ];
        parent::init();
    }
}
