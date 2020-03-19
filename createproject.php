<?php
session_start();
require("php/code.php");

$user = new Users;
$work = new Works;

 if(isset($_POST["Valider"]) && ($_POST["Valider"] === "OK"))
    {
        $work->create($_POST["titre"], $_POST["textoreo"]);
        header("Refresh:0");
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Modifier le projet</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<form id="form_id" method="post">
<div class ="container">
  <div class="form-group">
    <label for="exampleFormControlInput1">Ajouter un titre</label> <input type="text" name="titre" class="form-control" value="">
    <label for="exampleFormControlInput1">Ajouter une description</label>
    <textarea form="form_id" class="form-control" name="textoreo" value="" ></textarea>
  </div>
</form>

 <button class="btn btn-light" type="submit" name="Valider" value="OK">Ajouter le projet</button>

</body>
</html>