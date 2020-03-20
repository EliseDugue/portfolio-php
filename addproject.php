<?php
include_once("php/code.php");
$user = new Users;
$work = new Works;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mes projets existants</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<meta charset="UTF-8">
</head>
<body>
<div class="container"><br>
                  <h1>Mes projets existants</h1>
                  <p>Cliquez sur un projet pour le modifier</p><br>
    			 <?php
                 $allworks = $work->get_works();                  	

                foreach($allworks as $w)
                  { ?>

					<a href="modifproject.php?id=<?php echo($w["id"]); ?>">
                    <h2><?php echo($w["title"]); ?></h2></a>
					<?php } ?> <br>
					<a href="createproject.php" class="btn btn-success">Créer un nouveau projet</a>
					<br>
					<br>
					<a href="form.php" class="btn btn-primary">Modifier la description</a>
					<a href="index.php" class="btn btn-primary">Accueil</a>
 
</div>
</body>
</html>