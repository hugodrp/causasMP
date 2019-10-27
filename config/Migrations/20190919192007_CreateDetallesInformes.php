<?php
use Migrations\AbstractMigration;

class CreateDetallesInformes extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('detalles_informes');
        $table->addColumn('nro_nota_recibida', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('fecha_nota_recibida', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('fecha_asignacion', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('fecha_inicio_informe', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('nro_informe_entrega', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('nro_nota_entrega', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('feha_entrega_informe', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();

        $refTable = $this->table('detalles_informes');
        $refTable->addColumn('detalle_causa_id', 'integer', array('signed' => 'disable'))
                 ->addForeignKey('detalle_causa_id', 'detalles_causas', 'id', array('delete' => 'CASCADE', 'update' => 'NO_ACTION'))
                 ->update();
        $refTable->addColumn('persona_id', 'integer', array('signed' => 'disable'))
                 ->addForeignKey('persona_id', 'personas', 'id', array('delete' => 'CASCADE', 'update' => 'NO_ACTION'))
                 ->update();
        $refTable->addColumn('categoria_informe_id', 'integer', array('signed' => 'disable'))
                 ->addForeignKey('categoria_informe_id', 'categorias_informes', 'id', array('delete' => 'CASCADE', 'update' => 'NO_ACTION'))
                 ->update();
    }
}
