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
        'nro_nota_recibida' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'fecha_nota_recibida' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'fecha_asignacion' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'fecha_inicio_informe' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'nro_informe_entrega' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nro_nota_entrega' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'feha_entrega_informe' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'causa_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'persona_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'categoria_informe_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'causa_id' => ['type' => 'index', 'columns' => ['causa_id'], 'length' => []],
            'persona_id' => ['type' => 'index', 'columns' => ['persona_id'], 'length' => []],
            'categoria_informe_id' => ['type' => 'index', 'columns' => ['categoria_informe_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'detalles_informes_ibfk_1' => ['type' => 'foreign', 'columns' => ['causa_id'], 'references' => ['causas', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
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
                'nro_nota_recibida' => 'Lorem ipsum dolor sit amet',
                'fecha_nota_recibida' => '2019-12-13',
                'fecha_asignacion' => '2019-12-13',
                'fecha_inicio_informe' => '2019-12-13',
                'nro_informe_entrega' => 'Lorem ipsum dolor sit amet',
                'nro_nota_entrega' => 'Lorem ipsum dolor sit amet',
                'feha_entrega_informe' => '2019-12-13',
                'created' => '2019-12-13 10:15:55',
                'modified' => '2019-12-13 10:15:55',
                'causa_id' => 1,
                'persona_id' => 1,
                'categoria_informe_id' => 1
            ],
        ];
        parent::init();
    }
}
