<div class='row icon-boxes'>
	<?php
		$db = mysqli_connect('localhost','root','','publicad');
		if (isset($_POST['search'])) {
			$searchkey = $_POST['search'];
			$sql = "SELECT * FROM acheteur WHERE id_ach LIKE '%$searchkey%'
			 		OR type_permis_ach LIKE '%$searchkey%' OR substance_ach LIKE 
			 		'%$searchkey%' OR localisation_ach LIKE '%$searchkey%'";
		}else{
			$sql = "SELECT * FROM acheteur";
		}
		$query = mysqli_query($db,$sql) or die("bad query");

		while($row = mysqli_fetch_assoc($query)){
			echo "
				<div class='col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0' data-aos='zoom-in' data-aos-delay='100'>
					<div class='icon-box'>
						<div class='icon'>
							<i> class='ri-stack-line'</i>
						</div>
						<h4 class='title'>Permis {$row['id_ach']}</h4>
						<p class='description'>
							Type de permis:{$row['type_permis_ach']}<br>
							Substance:{$row['substance_ach']}<br>
							Localisation:{$row['localisation_ach']}<br>
						</p><br>
						<button type='button' class='btn btn-outline-primary' data-toggle='modal'>Intéressé</button>
					</div>
				</div>";
		}
	?>
</div>