<?php
session_start();
require("php/code.php");

$user = new Users;
$work = new Works;
$project = $work->get_project($_GET["id"]);

 if(isset($_POST["Valider"]) && ($_POST["Valider"] === "OK"))
    {
        $project->update($_POST["titre"], $_POST["textoreo"], $_GET["id"]);
        header("Refresh:0");
    }

 if(isset($_POST["Supprimer"]) && ($_POST["Supprimer"] === "DEL"))
 {
 	//$db->query("DELETE FROM works WHERE id = \"$project["id"]\"");
 	$req = $db->prepare('DELETE FROM works WHERE id=?');
	$req->execute([$_GET["id"]]);
	header("Location: /addproject.php");
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
    <label for="exampleFormControlInput1">Modifier le titre</label> <input type="text" name="titre" class="form-control" value="<?php echo($project["title"]);?>">
    <label for="exampleFormControlInput1">Modifier la description</label>
  
    <textarea form="form_id" class="form-control" name="textoreo" value="<?php echo($project["description"]);?>" ><?php echo($project["description"]);?></textarea>
  </div>
</form>

 <button class="btn btn-light" type="submit" name="Valider" value="OK">Valider les modifications</button>
 <button class="btn btn-danger" type="submit" name="Supprimer" value="DEL">Supprimer le projet</button>

</body>
</html>