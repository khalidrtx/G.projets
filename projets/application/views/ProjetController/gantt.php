<?php
// Inclusion des bibliothèques nécessaires
require_once('labrary/jpgraph-4.4.1/src/jpgraph.php');
require_once('labrary/jpgraph-4.4.1/src/jpgraph_gantt.php');

// Création d'un nouveau graphique Gantt
$graph = new GanttGraph();

// Boucle à travers les tâches et création de chaque barre Gantt correspondante
while($this->gantt){
    $task = new GanttBar($this->gantt['ID'], $this->gantt['Nom'], $this->gantt['Debut'], $this->gantt['Fin']);
    $graph->Add($task);
}

// Affichage du graphique Gantt généré
$graph->Stroke();
?>
