<html>
	<head>
		<style>
			/* Form styles */

      form {
max-width: 600px;
margin: 0 auto;
padding: 20px;
background-color: #f9f9f9;
border: 1px solid #ddd;
border-radius: 5px;
box-shadow: 0px 0px 10px #ddd;
}

label {
display: block;
margin-bottom: 10px;
font-size: 18px;
font-weight: bold;
}

input[type="text"],
input[type="date"],
textarea {
width: 100%;
padding: 10px;
border: none;
border-bottom: 2px solid #ddd;
font-size: 16px;
margin-bottom: 20px;
}

textarea {
height: 100px;
}

input:focus,
textarea:focus {
outline: none;
border-bottom: 2px solid #007bff;
}

button[type="submit"],
button[type="reset"] {
padding: 10px 20px;
background-color: #007bff;
color: #fff;
border: none;
border-radius: 5px;
font-size: 16px;
font-weight: bold;
cursor: pointer;
transition: all 0.2s ease-in-out;
margin-right: 10px;
}

button[type="submit"]:hover,
button[type="reset"]:hover {
background-color: #0069d9;
}

/* Heading styles */
h1 {
font-size: 30px;
margin-bottom: 30px;
text-align: center;
font-family: "Segoe UI", sans-serif;
text-transform: uppercase;
letter-spacing: 2px;
}

/* Container styles */
.container {
max-width: 800px;
margin: 0 auto;
padding: 40px 20px;
}
		</style>
	</head>
	<body>
		<h1>Ajouter un projet</h1>
		<div class="container">
			<form action="../projetController/add" method="post" >
			<label> Titre </label>
			<input type="text" name="titre"><br>
			<label> Date Début </label>
			<input type="date" name="debut"><br>
			<label> Date Fin </label>
			<input type="date" name="fin"><br>
			<label> Description </label>
			<textarea name="description">
			</textarea><br>
			<button type="submit" >Envoyer</button>
			<button type="reset" >Effacer</button>
			</form>
	</div>
		
	</body>

</html>