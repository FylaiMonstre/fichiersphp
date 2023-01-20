<?php
session_start();
require('core/function.php');

// on verifie si la personne est deja connecté

if($_SESSION['connect'] == 1 && (!empty($_COOKIE['login']) || !empty($_COOKIE['password'])))
{
    //si c'est le cas redirection vers la page prive
    header('location:prive.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include('inc/header.php');?>
    <h1>connectez vous à l'espace membres</h1>
    <?php
    if(isset($_GET['message']))
    {
        $message = urldecode($_GET['message']);
        echo '<div style="background:red;width:100%;border-radius:30px;color:white;">'.$message.'</div>';
    }
    ?>
    <form action="action.php?e=connexion" method="post" name="membres">
        <label for="login">login</label>
        <input type="text" name="login"/>
        <br/>
        <label for="password">Password</label>
        <input type="password" name="password"/>
        <br/>
        <button type="submit" name="submit">Se connecter</button>
    </form>
</body>
</html>