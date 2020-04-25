
<div class="container">
	<!-- navbar ends -->
	<!-- info alert -->
	<div class="alert alert-warning col-lg-7 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-0 col-sm-offset-1 col-xs-offset-0" style="margin-top:70px">

		<span class="glyphicon glyphicon-book"></span>
	    <strong>Liste de vos réservation</strong>
	</div>

</div>

	

		  <table class="table table-bordered">
		  <thead>
					<tr> 
					<th>Code livre</th>
					<th>Nom Auteur</th>
					 <th>Prenom Auteur</th>
					 <th>Titre</th>
	                  <th>Categorie</th>
					<th>ISBN</th>
				  </tr>    
					</thead>
					 <?php

					$sql = "SELECT * FROM emprunts"; 	
					
					$query = mysqli_query($conn, $sql);
					$counter =1;
						while($row = mysqli_fetch_array($query)){
							
							?>
							<tbody>
							<tr>
							<td><?php echo $counter++; ?></td>
							<td><?php echo $row['empcodelivre'];?></td>
							 <td><?php echo $row['empnumlect']; ?></td>
							</tr>
							</tbody>
							<?php }
					
					 ?>

<?php 	
if(isset($_POST['submit'])){
	$bdate = trim($_POST['dres']);
	$due = trim($_POST['dret']);

	

	$sql = "INSERT INTO emprunts(memberName, matricNo, bookName, borrowDate, returnDate) values('$mcard', '$bdate', '$due')";
	$query = mysqli_query($conn, $sql);

}
	
?>
		            

		         
		   
		 
	  </div>
	</div>
</body>
</html>