<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TiposTrabajosFixture
 */
class TiposTrabajosFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'st_tipo_trabajo';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_tipo_trabajo' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Clave Primaria', 'autoIncrement' => true, 'precision' => null],
        'descripcion' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => 'Descripción Tipo Trabajo', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_tipo_trabajo'], 'length' => []],
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
                'id_tipo_trabajo' => 1,
                'descripcion' => 'Lorem ipsum dolor sit amet',
                'created' => '2019-09-19 16:23:38',
                'modified' => '2019-09-19 16:23:38'
            ],
        ];
        parent::init();
    }
}
