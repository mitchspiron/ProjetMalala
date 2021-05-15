<div class='row icon-boxes'>
	<?php
		$db = mysqli_connect('localhost','root','','publicad');
		if (isset($_POST['search_vend'])) {
			$searchkey = $_POST['search_vend'];
			$sql = "SELECT * FROM vente WHERE id LIKE '%$searchkey%'
			 		OR substance LIKE '%$searchkey%' OR nb_carre LIKE 
			 		'%$searchkey%' OR localisation LIKE '%$searchkey%'";
		}else{
			$sql = "SELECT * FROM vente";
		}
		$query = mysqli_query($db,$sql) or die("bad query");

		while($row = mysqli_fetch_assoc($query)){
			echo "
				<div class='col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0' data-aos='zoom-in' data-aos-delay='100'>
					<div class='icon-box'>
						<div class='icon'>
							<i> class='ri-stack-line'</i>
						</div>
						<h4 class='title'>Permis {$row['id']}</h4>
						<p class='description'>
							Substance:{$row['substance']}<br>
							Nombre de carre:{$row['nb_carre']}<br>
							Localisation:{$row['localisation']}<br>
						</p><br>
						<button type='button' class='btn btn-outline-primary' data-toggle='modal'>Intéressé</button>
					</div>
				</div>";
		}
	?>
</div>