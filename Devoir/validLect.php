<?php 

session_start();
$lecteur_nom = $_SESSION['lecteur-nom'];

 ?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
 <div class="container " style="margin-top: 100px">
 		<div class="row col-lg-12 col-lg-offset-1" style="margin-top: 30px;margin-bottom: 40px">
            <div class="col-lg-6 col-md-6">
            	<h2>Validation d'enregistrement d'un lecteur</h2>
            </div>
         </div>
            <div class="jumbotron">
               <table class="table table-bordered">
                    <?php 
                    $sql = "SELECT * from lecteurs where lecnom = '$nom'";
                    $query = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($query)) { ?>
                                 
                  <tbody> 
                    <tr> 
                    
                     <td>Nom : </td>
                     <td><?php echo $row['nom']; ?></td>
                     
                    </tr> 
                    <tr> 
                     
                     <td>Prenom: </td>
                     <td><?php echo $row['prenom']; ?></td>
                    </tr> 
                    <tr> 
                     
                     <td>Adresse: </td>
                     <td><?php echo $row['adresse']; ?></td>
                    </tr>
                    <tr>
                     <tr> 
                    
                     <td>Ville : </td>
                     <td><?php echo $row['ville']; ?></td>
                    </tr>
                    
                      <tr> 
                    
                     <td>Codepostal : </td>
                     <td><?php echo $row['code']; ?></td>
                    </tr>
					
                    <tr>
                     
                     <td>Password : </td>
                     <td><?php echo $row['mdps']; ?></td>
                    </tr>  
                   
                 </tbody> 
                 <?php } ?>
           </table>
         

            </div> 
      </div>
	  
	  
</body>
</html>