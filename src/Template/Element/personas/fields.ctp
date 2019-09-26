<?php
    echo $this->Form->input('nombre',			['label' => 'Nombres']);
    echo $this->Form->input('apellido',			['label' => 'Apellidos']);
    echo $this->Form->input('cic',				['label' => 'Cédula de Identidad']);
    echo $this->Form->input('funcionario',		['options' => ['NO' => 'NO', 'SI' => 'SI']]);
    echo $this->Form->input('fiscal',			['options' => ['NO' => 'NO', 'SI' => 'SI']]);
    echo $this->Form->input('fecha_nacimiento', ['label' => 'Fehca de Nacimiento', 'placeholder' => 'AAAA-MM-DD']);
    //echo $this->Form->control('fecha_nacimiento', ['label' => 'Fecha de Nacimiento', 'empty' => false, 'type' => 'date' ,'dateFormat' => 'DMY', 'minYear' => date('Y') - 70, 'maxYear' => date('Y') - 18 ]);
?>