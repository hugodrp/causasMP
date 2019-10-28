<?php
    echo $this->Form->input('title', ['options' => ['Informe Técnico' => 'Informe Técnico', 'Puntos Periciales' => 'Puntos Periciales', 'Constitución Oficina' => 'Constitución Oficina', 'Constitución Externa' => 'Constitución Externa', 'Juicio Oral' => 'Juicio Oral', 'Intervención / Allanamiento' => 'Intervención / Allanamiento', 'Nota' => 'Nota', 'Capacitación - Charla' => 'Capacitación - Charla'], 'label' => 'Tipo Trabajo']);
    echo $this->Form->input('url', ['type' => 'text', 'label' => 'Número']);
    echo $this->Form->input('description', ['label' => 'Descripción']);
?>

<!-- <?php
    echo $this->Form->input('title', ['label' => 'Título']);
    echo $this->Form->input('url', ['type' => 'text', 'label' => 'Número']);
    echo $this->Form->input('description', ['label' => 'Descripción']);
?> -->