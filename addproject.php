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
	<title>Add Project</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
 <a href="index.php" class="btn btn-primary">Accueil</a>
 <a href="form.php" class="btn btn-primary">Modifier la description</a>
      <?php
                 $allworks = $work->get_works();
                foreach($allworks as $w)
                  { ?>
					<a href="modifproject.php?id=<?php echo($w["id"]); ?>">
                    <h2><?php echo($w["title"]); ?></h2></a>
					<?php } ?>
 <a href="createproject.php" class="btn btn-primary">Créer un nouveau projet</a>
</body>
</html>