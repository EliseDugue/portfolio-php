<?php
include_once("php/code.php");
$user = new Users;
$work = new Works;
$description = $user->get_description(2);

 if(isset($_POST["Valider"]) && ($_POST["Valider"] === "OK"))
    {
        global $db;

        $request = $db->prepare('UPDATE Users SET description=? WHERE id=?');
        $request->execute([$_POST["textoreo"], 2]);
        header("Refresh:0");
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Espace administrateur</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<form id="form_id" method="post">
<div class ="container">
  <div class="form-group">
    <label for="exampleFormControlInput1">Modifier la description</label>
  
    <textarea form="form_id" class="form-control" name="textoreo" value="<?php echo($description["description"]);?>" ><?php echo($description["description"]);?></textarea>

  </div>
</form>

 <button class="btn btn-light" type="submit" name="Valider" value="OK">Valider la description</button>
 <a href="index.php" class="btn btn-primary">Accueil</a>
 <a href="addproject.php" class="btn btn-primary">Créer/Modifier des projets</a>


</body>
</html>