<?php
use Migrations\AbstractMigration;

class CreateCausas extends AbstractMigration
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
        $table = $this->table('causas');
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
        $table->addColumn('caratula', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        // $table->addColumn('unidad_fiscal', 
        //     'enum', array('values' => 'Unidad 0, Unidad 1, Unidad 2, Unidad 3, Unidad 4, Unidad 5, Unidad 6, Unidad 7, Unidad 8, Unidad 9, Unidad 10, Unidad 11, Unidad 12, Unidad 13, Unidad 14, Unidad 15, Unidad 16, Unidad 17, Unidad 18, Unidad 19, Unidad 20, Unidad 999')
        // );
        $table->addColumn('unidad_fiscal', 'string', [
            'default' => null,
            'limit' => 15,
            'null' => false,
        ]);
        $table->addColumn('resultado', 
            'enum', array('values' => 'Abierto, Archivado, Desestimado, Sentenciado, Sobreseído')
        );
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

        $refTable = $this->table('causas');
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
