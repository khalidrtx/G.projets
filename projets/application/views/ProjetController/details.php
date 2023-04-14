<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>/* Table styles */
	@import url('https://fonts.googleapis.com/css2?family=Satisfy&display=swap');
/* Table styles */
table {
  border-collapse: collapse;
  width: 100%;
  margin: 20px 0;
  font-size: 16px;
}

th,
td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
  font-weight: bold;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #f5f5f5;
  cursor: pointer;
}

/* Heading styles */
h1 {
  font-size: 24px;
  margin-bottom: 10px;
  font-family: Arial, sans-serif;
  font-weight: bold;
  text-align: center;
}

/* Container styles */
.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}

/* Button styles */
button {
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 3px;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
  transition: all 0.2s ease-in-out;
  margin-right: 10px;
}

button:hover {
  background-color: #0069d9;
}


        
</style>
</head>
<body>
<?php 
echo '<h1>Information générales : </h1>';
echo '<table border=1> 
     <tr><th>Titre</th><td>'.$this->details['Titre'].'</td><tr>
	 <tr><th>Debut</th><td>'.$this->details['DatDebut'].'</td><tr>
	 <tr><th>Fin</th><td>'.$this->details['DateFin'].'</td><tr>
	 <tr><th>Dscription</th><td>'.$this->details['Description'].'</td><tr>
	 </table>';
if(sizeof($this->details['tasks'])){
	echo '<h1>Liste des tâches : </h1>';
	echo '<table border=1><tr><th>N°</th><th>Tache</th><th>Début</th><th>Fin</th><th>action</th></tr>';
	$i=1;
	foreach($this->details['tasks'] as $task){
		echo '<tr><td>'.$i++.'</td><td>'.$task['Nom'].'</td><td>'.$task['Debut'].'</td><td>'.$task['Fin'].'</td><td><a class="delete-btn" href="../../TaskController/delete/'.$task['ID'].'">Supprimer</td></tr>';
	}
	echo'</table>';
}

?>
</body>
</html>