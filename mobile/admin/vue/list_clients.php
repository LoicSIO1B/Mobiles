
<div style="clear:left;"><br/></div>
	<div class="row">
		<table class="table table-bordered">
  			<thead class="thead-light">
  				<tr>
					<th colspan="2" scope="col"> Table Clients</th>
      				
				</tr>
			</thead>

			<tbody>			
			<tr style ="background:#0F6;color:#FFF;">
				<th style ="width:100px;" >Numéro</th>
				<th>nom</th>
				<th>Prénom</th>
				<th>Username</th>
				<th>Email</th>
				<th>Date création du compte</th>
				<th>Nombre modification mdp</th>
				<th style ="width:100px;">Delete</th>
			</tr>
	<?php
			$stt=1;
			$unControleur->setTable("client");
	       	$resultats = $unControleur->selectAll ();			
	        foreach ($resultats as $data) {
				echo "<tr>";
				echo "<td>$stt</td>";
				echo "<td>$data[nomCl]</td>";
				echo "<td>$data[prenomCl]</td>";
				echo "<td>$data[username]</td>";
				echo "<td>$data[email]</td>";
				echo "<td>$data[date_creation_compte]</td>";
				echo "<td>$data[n_mdp]</td>";
				
				echo "<td><a href='index.php?page=4&id=$data[idCl]' onclick='return show_confirm();' style ='color:#F3F;' >Delete</a></td>";
			echo "</tr>";
			$stt++;
		}

	?>
		</tbody>
	</table>
</div>

	