<!DOCTYPE html>
<?php
session_start();
include_once("php/code.php");

$user = new Users;
if(isset($_SESSION["account"]["id"])) //pour les cookies
{
    header('Location: /');
}
if(isset($_POST["submit"]) && ($_POST["submit"] === "OK"))
    {
    if($_POST['uname'] != NULL && $_POST['psw'] != NULL && $_POST['uname'] == "admin" && $_POST['psw'] == "admin")
    {
        header('Location: /form.php');
    }
    else
    {
        ?><script> alert("Vous ne pouvez pas accéder à l'espace administrateur !")</script><?php
    }
}
?>
<html lang="fr">
<head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
</head>
<body>

    <form action="login.php" method="post">

    <div class="container">
        <br>
        <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Nom d'utilisateur</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="uname">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="psw">
    <br>
    <button type="submit" name="submit" value="OK" class="btn btn-warning">Se connecter</button>
    <a href="index.php" class="btn btn-primary">Accueil</a>
  </div>


    </div>
    </form>
</body>
</html>