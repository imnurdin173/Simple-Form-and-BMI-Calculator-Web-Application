<?php
error_reporting(0);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameError = "Isi nama";
  } else {
    $name = test_input($_POST["name"]);
    $success = true;
  }

  if (empty($_POST["berat"])) {
    $beratError = "Silahkan isi berat badan";
  } else {
    $berat = test_input($_POST["berat"]);
    $success = true;
  }

  if (empty($_POST["tinggi"])) {
    $tinggiError = "Silahkan isi tinggi badan";
  } else {
    $tinggi = test_input($_POST["tinggi"]);
    $success = true;
  }

  if (empty($_POST["gender"])) {
    $genderError = "Isi gender";
  } else {
    $gender = test_input($_POST["gender"]);
    $success = true;
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function hitungBMI($tinggi, $berat){
	$tinggimtr = $tinggi/100;
	$bmi = $berat/(pow($tinggimtr,2));
	return $bmi;
}

function kategoriBMI($tinggi, $berat){
	if(hitungBMI($tinggi, $berat)<18.5 && hitungBMI($tinggi, $berat) > 0){
		$kategori = "underweight";
	}else if(hitungBMI($tinggi, $berat)>=18.5 && hitungBMI($tinggi, $berat)<= 25){
		$kategori = "normal";
	}else if(hitungBMI($tinggi, $berat)>25 && hitungBMI($tinggi, $berat)<= 30){
		$kategori = "Overweight";
	}else if (hitungBMI($tinggi, $berat)>30){
		$kategori = "Obesitas";
	} else $kategori = "";
	return $kategori;
}

include("header.php");
?>

<style> .error {color:red;} </style>
<div class="contain">
 <section>
  <div class="konten">
    <p><span class="error">* Harus Di-isi.</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
      Nama: <input type="text" name="name">
      <span class="error">* <?php echo $nameError;?></span>
      <br><br>

      Gender:
      <input type="radio" name="gender" value="laki-laki">Laki-laki
      <input type="radio" name="gender" value="perempuan">Perempuan
      <span class="error">* <?php echo $genderError;?></span>
      <br><br>

      Berat: <input type="text" name="berat"> KG
      <span class="error">* <?php echo $beratError;?></span>
      <br><br>

      Tinggi: <input type="text" name="tinggi"> CM
      <span class="error">* <?php echo $tinggiError;?></span>
      <br><br>

      <input type="submit" name="submit" value="Submit">
      <input type="reset" name="reset" value="Reset">
    </form>

    <div style="margin:10px 0 10px 0;text-align:left;">
      <?php 
      error_reporting(0);
      echo '<table width="20%">
      <tr>
      <th>Nama</th>
      <td>:</td>
      <td>'.$name.'</td>
      </tr>
      <tr>
      <th>Gender</th>
      <td>:</td>
      <td>'.$gender.'</td>
      </tr>
      <tr>
      <th>Berat</th>
      <td>:</td>
      <td>'.$berat.'</td>
      </tr>
      <tr>
      <th>Tinggi</th>
      <td>:</td>
      <td>'.$tinggi.'</td>
      </tr>
      <tr>
      <th>Nilai BMI</th>
      <td>:</td>
      <td>'.hitungBMI($tinggi,$berat).'</td>
      </tr>
      <tr>
      <th>Kategori</th>
      <td>:</td>
      <td>'.kategoriBMI($tinggi, $berat).'</td>
      </tr>
      </table>';
      ?>
    </div>
  </div>
</section>
</div>
<?php include('footer.php');?>
