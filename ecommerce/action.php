<?php
// On commence par récupérer les champs
if(isset($_POST['name']))      $name=$_POST['name'];
else      $name="";

if(isset($_POST['email']))      $email=$_POST['email'];
else      $email="";

if(isset($_POST['subject']))      $subject=$_POST['subject'];
else      $subject="";

if(isset($_POST['message']))      $message=$_POST['message'];
else      $message="";

       // connexion à la base
$db = mysql_connect("localhost","root","")  or die('Erreur de connexion '.mysql_error());
// sélection de la base  

    mysql_select_db('ecomm',$db)  or die('Erreur de selection '.mysql_error());
    
    // on écrit la requête sql
    $sql = "INSERT INTO contact(name, email, subject,message) VALUES('$name','$email','$subject','$message')";
    
    // on insère les informations du formulaire dans la table
    mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());

    // on affiche le résultat pour le visiteur
    echo 'Vos infos on été ajoutées.';

    mysql_close();  // on ferme la connexion
?>