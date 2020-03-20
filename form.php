<?php
include_once("php/code.php");
$user = new Users;
$work = new Works;
$description = $user->get_description();

 if(isset($_POST["Valider"]) && ($_POST["Valider"] === "OK"))
    {
        global $db;

        $request = $db->prepare('UPDATE description SET texte=? WHERE id=?');
        $request->execute([$_POST["textoreo"], 1]);
        header("Refresh:0");
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Espace administrateur</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<meta charset="UTF-8">
</head>
<body>
	<form id="form_id" method="post">
<div class ="container">
	<br>
  <div class="form-group">
    <label for="exampleFormControlInput1">Modifier le "A Propos"</label>
    <textarea form="form_id" class="form-control" name="textoreo" value="<?php echo($description["texte"]);?>" id="exampleFormControlTextarea1" rows="3" ><?php echo($description["texte"]);?></textarea>
    <br>
 <button class="btn btn-warning" type="submit" name="Valider" value="OK">Valider la description</button>
 <a href="index.php" class="btn btn-primary">Accueil</a>
 <a href="addproject.php" class="btn btn-primary">Créer/Modifier des projets</a>
  </div>
  </div>
</form>




</body>
</html>