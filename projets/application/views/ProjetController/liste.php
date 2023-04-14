<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* Tableau */
    .project-table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }

    .project-table th,
    .project-table td {
        border: 1px solid #ccc;
        padding: 10px;
    }

    .project-table th {
        background-color: #f7f7f7;
        text-align: center;
    }

    .delete-btn,
.planifier-btn,
.details-btn,
.gantt-btn {
  display: inline-block;
  padding: 8px 20px;
  border: none;
  border-radius: 3px;
  color: #fff;
  text-decoration: none;
  margin-right: 10px;
  font-weight: bold;
  transition: all 0.2s ease-in-out;
  cursor: pointer;
}

.delete-btn {
  background-color: #e74c3c;
}

.planifier-btn {
  background-color: #3498db;
}

.details-btn {
  background-color: #f1c40f;
}

.gantt-btn {
  background-color: #2ecc71;
}

.delete-btn:hover,
.planifier-btn:hover,
.details-btn:hover,
.gantt-btn:hover {
  transform: scale(1.1);
}

    .btn:hover {
        transform: scale(1.1);
    }

    /* Titre de projet */
    .project-heading {
        font-family: 'Satisfy', cursive;
        font-size: 60px;
        font-weight: bold;
        color: #333;
        text-align: center;
        margin-top: 20px;
        margin-bottom: 10px;
        text-shadow:
            #ffffff 0 0 15px,
            #85FFBD 0 0 22px,
            #85FFBD 0 0 25px;
        transition: 2s all ease;
        cursor: pointer;
    }

    .project-heading:hover {
        text-shadow:
            #ffffff 0 0 15px,
            #85FFBD 0 0 22px,
            #85FFBD 0 0 35px;
    }
</style> 
</head>
<body>
<?php
echo '<h1 class="project-heading">Liste des Projets </h1>';
echo '<table class="project-table">
      <tr><th>N°</th><th>Titre</th><th>Date début</th><th>Date fin</th><th>Description</th><th colspan="4">Actions</th></tr>';
$i=1;
foreach( $this->projets as $projet){
echo '<tr><td>'.$i++.'</td><td>'.$projet['Titre'].'</td><td>'.$projet['DatDebut'].'</td><td>'.$projet['DateFin'].'</td><td>'.$projet['Description'].'</td></td>
      <td><a class="delete-btn" href="../projetController/delete/'.$projet['Id'].'">Supprimer</td>
	  <td><a class="planifier-btn" href="../TaskController/add/'.$projet['Id'].'">Planifier</td>
	  <td><a class="details-btn" href="../ProjetController/details/'.$projet['Id'].'">Détails</td>
	  <td><a class="gantt-btn" href="../ProjetController/summury/'.$projet['Id'].'">Générer Gantt</td>
	  </tr>';
}
echo '</table>';
?>

</body>
</html>