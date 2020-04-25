<?php 
session_start();
include('includes/config.php');
error_reporting(0);
if(isset($_POST['signup']))
{  
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adresse=$_POST['adresse']; 
$ville=$_POST['ville']; 
$code=$_POST['codep']; 
$password=md5($_POST['mdps']);
$sql="INSERT INTO  lecteurs(lecnom,lecprenom,lecadresse,lecville,leccodepostal,lecmotdepasse) VALUES(:nom,:prenom,:adresse,:ville,:code,:mdps)";
$query = $dbh->prepare($sql);
$query->bindParam(':nom',$nom,PDO::PARAM_STR);
$query->bindParam(':prenom',$prenom,PDO::PARAM_STR);
$query->bindParam(':adresse',$adresse,PDO::PARAM_STR);
$query->bindParam(':ville',$ville,PDO::PARAM_STR);
$query->bindParam(':code',$code,PDO::PARAM_STR);
$query->bindParam(':mdps',$mdps,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo '<script>alert("Vous êtes enregistré avec succès")</script>';
}
else 
{
echo "<script>alert('Erreur');</script>";
}
}
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <title>Enregistrement d'un lecteur</title>   

</head>
<body>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Enregistrement d'un lecteur :</h4>
                
                            </div>

        </div>
             <div class="row">
           
<div class="col-md-9 col-md-offset-1">
               <div class="panel panel-danger">
                        <div class="panel-heading">
                           Formulaire d'enregistrement
                        </div>
                        <div class="panel-body">
                            <form name="signup" method="post" onSubmit="return valid();">
<div class="form-group">
<label>Nom :</label>
<input class="form-control" type="text" name="nom" autocomplete="off" required />
</div>

<div class="form-group">
<label>Prenom :</label>
<input class="form-control" type="text" name="prenom" autocomplete="off" required />
</div>

<div class="form-group">
<label>Adresse :</label>
<input class="form-control" type="text" name="adresse" autocomplete="off" required />
</div>

<div class="form-group">
<label>Ville :</label>
<input class="form-control" type="text" name="ville" maxlength="10" autocomplete="off" required />
</div>
                                        
<div class="form-group">
<label>Code postal :</label>
<input class="form-control" type="text" name="code"  autocomplete="off" required  />
   <span id="user-availability-status" style="font-size:12px;"></span> 
</div>

<div class="form-group">
<label>Enter Password</label>
<input class="form-control" type="password" name="mdps" autocomplete="off" required  />
</div>
                             
<button type="submit" name="signup" class="btn btn-danger" id="submit">Enregistrer</button>

                                    </form>
                            </div>
                        </div>
                            </div>
        </div>
    </div>
    </div>
</body>
</html>
