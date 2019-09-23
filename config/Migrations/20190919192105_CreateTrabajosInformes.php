<?php
use Migrations\AbstractMigration;

class CreateTrabajosInformes extends AbstractMigration
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
        $table = $this->table('trabajos_informes');
        $table->addColumn('observacion', 'text', [
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
        
        $refTable = $this->table('trabajos_informes');
        $refTable->addColumn('detalle_informe_id', 'integer', array('signed' => 'disable'))
                 ->addForeignKey('detalle_informe_id', 'detalles_informes', 'id', array('delete' => 'CASCADE', 'update' => 'NO_ACTION'))
                 ->update();
        $refTable->addColumn('tipo_trabajo_id', 'integer', array('signed' => 'disable'))
                 ->addForeignKey('tipo_trabajo_id', 'tipos_trabajos', 'id', array('delete' => 'CASCADE', 'update' => 'NO_ACTION'))
                 ->update();
    }
}
