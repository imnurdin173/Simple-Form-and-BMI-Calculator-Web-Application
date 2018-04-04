<?php include('header.php'); ?>

<div class="contain">
	<section class="profil">
		<div class="konten">
			<form action="#" method="get">
				<input type="text" name="name" placeholder="Masukan nama anda ..." required><br/>
				<input type="text" name="email" placeholder="masukan email anda ..." required><br/>
				<input type="text" name="contact" placeholder="Masukan alamat anda ..." required><br/>
				<input type="submit" name="submit" value="Submit">
			</form>

			<?php
			if( $_GET["name"] || $_GET["email"] || $_GET["contact"])
			{
				echo '<div class="output">';
				echo "Nama Anda: ". $_GET['name']. "<br />";
				echo  "Email Anda: ". $_GET["email"]. "<br />";
				echo "Alamat: ". $_GET["contact"];
				echo '</div>';
			}
			?>
		</div>
	</section>
</div>
<?php include('footer.php'); ?>