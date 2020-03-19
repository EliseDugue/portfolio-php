<?php
require("database.php");

class Users {
    function get_user($id)
    {
        global $db;

        $request = "SELECT * FROM Users WHERE id=$id";
        $resultat = $db->query($request);
        $user = $resultat->fetch();

        return($user);
    }


        function get_description($id)
    {
        global $db;

        $request = "SELECT description FROM Users WHERE id=$id";
        $resultat = $db->query($request);
        $description = $resultat->fetch();

        return($description);
    }


    function connect($username, $password)
    {
        global $db;
        echo($username);
        $request = "SELECT * FROM Users WHERE username=\"$username\"";
        $resultat = $db->query($request);
        $user = $resultat->fetch();

        if(password_verify($password, $user["password"]))
        {
            session_start();
            $_SESSION["account"] = [
                'id' => $user["id"],
                'username' => $user["username"]
            ];

            header('Location: /');
        }
        else
        {
            echo("Impossible de se connecter");
        }
    }
}

class Works {
    function get_works()
    {
        global $db;

        $request = "SELECT * FROM works";
        $resultat = $db->query($request);
        $works = $resultat->fetchAll();

        return($works);
    }

    function get_project($id)
    {
        global $db;

        $request = "SELECT * FROM works WHERE id=$id";
        $resultat = $db->query($request);
        $project = $resultat->fetch();

        return($project);

    }


    function create($title, $description)
    {
        global $db;

        $request = $db->prepare('INSERT INTO works (title, description) VALUES (?, ?)');
        $request->execute([$title, $description]);
    }

    function update($title, $description, $id)
    {
        global $db;

        $request = $db->prepare('UPDATE works SET title=?, description=? WHERE id=?');
        $request->execute([$title, $description, $id]);
    }

}
?>