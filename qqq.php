<?php

session_start();

include_once("clase/operare.php");

if (isset($_POST['btnok'])) {

$crud = new operare();
  $username = $_POST['username'];   
 
    $password = $_POST['password'];
    if($username==""||$password==""){header("Location: index.php");}
    $sqlx = "SELECT * FROM `admini` WHERE user='$username' AND parola='".hash('sha256', $password)."'";
   $rezultat = $crud->preluare($sqlx);
  $user_id=0;
foreach ($rezultat as $key => $camp){$user_id=$camp['nr'];$user=$camp['user'];$pass=$camp['parola'];}
      
        if($user_id!=0)
        {
            $_SESSION['user_id'] = $user_id; // Set Session
            echo $user_id;
            header("Location: dashboard.php"); // Redirect user to the profile.php
        }
        else
        {
           
             echo 'Date de logare invalide!<br>'. $user_id;
              echo $username."<br>".$password."<br>".hash('sha256', $password);
             header("Location: https://accounts.google.com/devtools/www/Eroare_de_conectare");
        }
    }


?>
