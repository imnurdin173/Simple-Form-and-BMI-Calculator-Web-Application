<?php include 'header.php'; ?>
<?php  
function diamon() {
for ($i = 1; $i <= 5; $i++) {
 for ($j = $i; $j < 5; $j++) {
 echo "";
 }

 for ($k = 1; $k < ($i * 2); $k++) {
 echo "*";
 }
 echo "</br>";
}

for ($i = 4; $i >= 1; $i--) {
 for ($j = 5; $j > $i; $j--) {
 echo "";
 }

 for ($k = 1; $k < ($i * 2); $k++) {
 echo "*";
 }
 echo "</br>";
}
}

function numFibo () {
for($i=1;$i<=6;$i++)
{
	for($j=$i;$j>=1;$j--)
 	{ 
 		echo $j.'&nbsp;';

   		if($j==1)
    	{
       		echo '&nbsp;';
       		echo "<br />";
    	}
  	}
} 
}
?>
<style>
.box {
    display:inline-block;
    margin: 10px 20px 10px 20px;
    font-size:20px;
    }
</style>
<div class="contain">
    <section>
    <div class="konten" style="text-align:center;">
        <div class="box">
            <?php echo diamon(); ?>
        </div>
        <div class="box" style="text-align:left;">
            <?php echo numFibo(); ?>
<?php

?>
        </div>
        </div>
    </section>
</div>

<?php
include 'footer.php';
?>