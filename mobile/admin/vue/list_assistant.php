
<div style="clear:left;"><br/></div>
	<div class="row">
		<table class="table table-bordered">
  			<thead class="thead-light">
  				<tr>
					<th colspan="6" scope="col"></th>
      				<th colspan="2" scope="col"><a href="index.php?page=3">Add des Assistants</a></th>
				</tr>
			</thead>

			<tbody>			
			<tr style ="background:#0F6;color:#FFF;">
				<th style ="width:100px;" >Numéro</th>
				<th>Nom</th>
				<th>Prénom</th>
				<th>Téléphone</th>
				<th>Email</th>
				<th>Salaire</th>
				<th style ="width:100px;">Edit</th>
				<th style ="width:100px;">Delete</th>
			</tr>
	<?php
			$stt=1;
			$unControleur->setTable("Assistant");
	       	$resultats = $unControleur->selectAll ();			
	        foreach ($resultats as $data) {
				echo "<tr>";
				echo "<td>$stt</td>";
				echo "<td>$data[nomAss]</td>";
				echo "<td>$data[prenomAss]</td>";
				echo "<td>$data[telAss]</td>";
				echo "<td>$data[mailAss]</td>";
				echo "<td>$data[Salaire]</td>";
				echo "<td><a href='index.php?page=4&id=$data[idAss]' style ='color:#09F;'>Edit</a></td>";
				echo "<td><a href='index.php?page=5&id=$data[idAss]' onclick='return show_confirm();' style ='color:#F3F;' >Delete</a></td>";
			echo "</tr>";
			$stt++;
		}

	?>
		</tbody>
	</table>
</div>

	