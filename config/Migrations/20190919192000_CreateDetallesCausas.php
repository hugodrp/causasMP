<?php
use Migrations\AbstractMigration;

class CreateDetallesCausas extends AbstractMigration
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
        $table = $this->table('detalles_causas');
        $table->addColumn('anho', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('nro_entrada', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('unidad_fiscal', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('resultado', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('tiempo_resultado', 'integer', [
            'default' => null,
            'limit' => 11,
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

        $refTable = $this->table('detalles_causas');
        $refTable->addColumn('circunscripcion_id', 'integer', array('signed' => 'disable'))
                 ->addForeignKey('circunscripcion_id', 'circunscripciones', 'id', array('delete' => 'CASCADE', 'update' => 'NO_ACTION'))
                 ->update();
        $refTable->addColumn('jurisdiccion_id', 'integer', array('signed' => 'disable'))
                 ->addForeignKey('jurisdiccion_id', 'jurisdicciones', 'id', array('delete' => 'CASCADE', 'update' => 'NO_ACTION'))
                 ->update();
        $refTable->addColumn('origen_id', 'integer', array('signed' => 'disable'))
                 ->addForeignKey('origen_id', 'origenes', 'id', array('delete' => 'CASCADE', 'update' => 'NO_ACTION'))
                 ->update();
        $refTable->addColumn('dependencia_id', 'integer', array('signed' => 'disable'))
                 ->addForeignKey('dependencia_id', 'dependencias', 'id', array('delete' => 'CASCADE', 'update' => 'NO_ACTION'))
                 ->update();
        $refTable->addColumn('hecho_punible_id', 'integer', array('signed' => 'disable'))
                 ->addForeignKey('hecho_punible_id', 'hechos_punibles', 'id', array('delete' => 'CASCADE', 'update' => 'NO_ACTION'))
                 ->update();
    }
}
