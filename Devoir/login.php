<?php
session_start();

// if ((isset($_SESSION['auth']) && $_SESSION['auth'] === true)) {
// 	header("Location: admin.php");
// 	exit();
// }

// 	if (isset($_GET['access'])) {
// 		$alert_user = true;
// 	}


// Error check

// 					echo"<br>";
// 					echo mysqli_errno($conn);

if(isset($_POST['submit'])){
			$sql_stud = "SELECT * from lecteurs where lecnom='$nom' and lecmotdepasse = '$mdps'";
				$query = mysqli_query($conn, $db);
				$row = mysqli_fetch_assoc($query);
				if($row['nom'] == $username && $row['mdps'] == $password){
					$_SESSION['lecteur-nom'] = $row['nom'];
					}
					else {
						echo"<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						<strong style='text-align: center'> Echec d'identification</strong>
				  </div>";
					}

}


?>



<div class="container">

			<div class="container">
				<form class="form-horizontal" method="post" action="login.php" enctype="multipart/form-data">
					<div class="form-group">
						<div class="col-sm-10">
							<input type="text" class="form-control" name="nom" placeholder="Saisir  votre nom" id="nom" required>
						</div>
					</div>
					<div class="form-group">

					</div>
					<div class="form-group">
						<div class="col-sm-10">
							<input type="password" class="form-control" placeholder="Saisir le mot de passe" name="mdps" id="password" required>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<input type="submit" class="btn btn-primary col-lg-4" name="submit" value="Login">


						</div>
					</div>

					</div>
				</form>
			</div>
		</div>
	</div>

</div>


</body>
</html>
