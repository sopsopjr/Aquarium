<!DOCTYPE html>
<html>
<head>
	<title>Aquarium</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<?php
		include("menu.html");
		include('connexion.inc.php');
	?>
	<h2 class="headline">
		Les activitées
	</h2>
	
	
	<p>Vous pouvez trouver ici les différentes activités proposée par les différents bassins !</p>
	
	<table>
		<tr>
			<td>Bassin</td>
			<td>Activité</td>
			<td>Heure de départ</td>
			<td>Heure de fin</td>
		</tr>
		<?php
			include('connexion.inc.php');
			$resultat= $cnx->query("SELECT * from edt WHERE publique = 'T'");
				foreach ($resultat as $ligne) {
						echo"<tr>";
						echo"<td>".$ligne['id_bassin']."</td>";
						echo"<td>".$ligne['activite']."</td>";
						echo"<td>".$ligne['heure_depart']."</td>";
						echo"<td>".$ligne['heure_fin']."</td>";
                        echo"</tr>";
			}
					
		?>
	
	</table>
	
	
	
	
</body>
</html>

