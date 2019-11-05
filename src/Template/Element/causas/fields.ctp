<!-- <?php
    echo $this->Form->input('title', ['options' => ['Informe Técnico' => 'Informe Técnico', 'Puntos Periciales' => 'Puntos Periciales', 'Constitución Oficina' => 'Constitución Oficina', 'Constitución Externa' => 'Constitución Externa', 'Juicio Oral' => 'Juicio Oral', 'Intervención / Allanamiento' => 'Intervención / Allanamiento', 'Nota' => 'Nota', 'Capacitación - Charla' => 'Capacitación - Charla'], 'label' => 'Tipo Trabajo']);
    echo $this->Form->input('url', ['type' => 'text', 'label' => 'Número']);
    echo $this->Form->input('description', ['label' => 'Descripción']);
?> -->

<!-- <?php
    echo $this->Form->input('title', ['label' => 'Título']);
    echo $this->Form->input('url', ['type' => 'text', 'label' => 'Número']);
    echo $this->Form->input('description', ['label' => 'Descripción']);
?> -->

<?php
    echo $this->Form->input('anho', ['label' => 'Año']);
    echo $this->Form->input('nro_entrada', ['label' => 'Número de Entrada']);
    echo $this->Form->input('caratula', ['label' => 'Carátula']);
    echo $this->Form->input('unidad_fiscal', ['label' => 'Unidad Fiscal', 'options' => ['Unidad 1' => 'Unidad 1', 'Unidad 2' => 'Unidad 2']]);

    echo $this->Form->input('dependencia_id', ['options' => $dependencias], ['label' => 'Dependencia']);
    
    echo $this->Form->input('origen_id', ['options' => $origenes], ['label' => 'Origen']);
    echo $this->Form->input('jurisdiccion_id', ['options' => $jurisdicciones], ['label' => 'Jurisdicción']);
    echo $this->Form->input('circunscripcion_id', ['options' => $circunscripciones], ['label' => 'Circunscripción']);
    echo $this->Form->input('hecho_punible_id', ['options' => $hechosPunibles], ['label' => 'Hecho Punible']);
?>