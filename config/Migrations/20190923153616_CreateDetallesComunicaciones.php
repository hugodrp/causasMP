<?php
use Migrations\AbstractMigration;

class CreateDetallesComunicaciones extends AbstractMigration
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
        $table = $this->table('detalles_comunicaciones');
        $table->addColumn('informacion', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('fecha_registro', 'date', [
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

        $refTable = $this->table('detalles_comunicaciones');
        $refTable->addColumn('persona_id', 'integer', array('signed' => 'disable'))
                 ->addForeignKey('persona_id', 'personas', 'id', array('delete' => 'CASCADE', 'update' => 'NO_ACTION'))
                 ->update();
        $refTable->addColumn('tipo_comunicacion_id', 'integer', array('signed' => 'disable'))
                 ->addForeignKey('tipo_comunicacion_id', 'tipos_comunicaciones', 'id', array('delete' => 'CASCADE', 'update' => 'NO_ACTION'))
                 ->update();
        $refTable->addColumn('tipo_origen_id', 'integer', array('signed' => 'disable'))
                 ->addForeignKey('tipo_origen_id', 'tipos_origenes', 'id', array('delete' => 'CASCADE', 'update' => 'NO_ACTION'))
                 ->update();
    }
}
