<?php 
if(isset($_POST['submit'])){

    $noma = sanitize(trim($_POST['noma']));
    $prenoma = sanitize(trim($_POST['prenoma']));
    $isbn = sanitize(trim($_POST['isbn']));
    $titre = sanitize(trim($_POST['titre']));
    $categorie = sanitize(trim($_POST['categorie']));

$sql = "INSERT INTO books( livnomaut, livprenomaut, livtitre, livcategorie, livISBN)
                 values ('$nom','$prenom','$titre','$category','$isbn')";

    $query = mysqli_query($conn, $sql);

    if($query){
        echo "<script>alert('Un nouveau livre est enregistré ');
					</script>";
    }
    else {
        echo "<script>alert('Erreur!');
					</script>";	
    }

}

?>


<div class="container">
    
    <div class="container  col-lg-9 col-md-11 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-1 col-sm-offset-0 col-xs-offset-0  " style="margin-top: 20px">
        <div class="jumbotron login2 col-lg-10 col-md-11 col-sm-12 col-xs-12">
       
            <p class="page-header" style="text-align: center">Enregistrement d'un livre </p>

            <div class="container">
                <form class="form-horizontal" role="form" enctype="multipart/form-data" action="addbook.php" method="post">
                    <div class="form-group">
                        <label for="Title" class="col-sm-2 control-label">Nom de l'auteur :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="noma"  required>
                        </div>      
                    </div>
                    <div class="form-group">
                        <label for="Author" class="col-sm-2 control-label">Prénom de l'auteur :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="prenoma"  required>
                        </div>      
                    </div>
                    <div class="form-group">
                        <label for="ISBN" class="col-sm-2 control-label">Titre :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="titre" required>
                        </div>      
                    </div>
                    <div class="form-group">
                        <label for="Publisher" class="col-sm-2 control-label">Categorie :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="category" required>
                        </div>      
                    </div>
                    <div class="form-group">
                        <label for="Publisher" class="col-sm-2 control-label">ISBN :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="isbn"  required>
                        </div>      
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button  name="submit" class="btn btn-info col-lg-12" data-toggle="modal" data-target="#info">
                                Ajouter
                            </button>
                            
                        </div>
                    </div>

                    
                </form>
            </div>
        </div>
        
    </div>
</body>
</html>