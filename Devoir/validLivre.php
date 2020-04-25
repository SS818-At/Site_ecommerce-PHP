<?php 

session_start();
$livre_titre = $_SESSION['livre-titre'];

 ?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
 <div class="container " style="margin-top: 100px">
 		<div class="row col-lg-12 col-lg-offset-1" style="margin-top: 30px;margin-bottom: 40px">
            <div class="col-lg-6 col-md-6">
            	<h2>Validation d'enregistrement d'un livre</h2>
            </div>
         </div>
            <div class="jumbotron">
               <table class="table table-bordered">
                    <?php 
                    $sql = "SELECT * from livre where livtitre = '$titre'";
                    $query = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($query)) { ?>
                                 
                  <tbody> 
                    <tr> 
                    
                     <td>Nom de l'Auteur : </td>
                     <td><?php echo $row['noma']; ?></td>
                     
                    </tr> 
                    <tr> 
                     
                     <td>Prenom de l 'Auteur: </td>
                     <td><?php echo $row['prenoma']; ?></td>
                    </tr> 
                    <tr> 
                     
                     <td>Titre : </td>
                     <td><?php echo $row['titre']; ?></td>
                    </tr>
                    <tr>
                     <tr> 
                    
                     <td>Categorie : </td>
                     <td><?php echo $row['categorie']; ?></td>
                    </tr>
                    
                      <tr> 
                    
                     <td>ISBN : </td>
                     <td><?php echo $row['isbn']; ?></td>
                    </tr> 
                   
                 </tbody> 
                 <?php } ?>
           </table>
         

            </div> 
      </div>
	  
	  
</body>
</html>