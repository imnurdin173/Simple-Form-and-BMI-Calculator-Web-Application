<?php include('header.php');?>

<div class="contain">
    <section>
        <div class="konten">
            <h3>PREMIER LEAGUE CLUB</h3>
            <div class="inputan">
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    Masukan Nama Klub Favorit Anda: <input type="text" name="fname">
                    <input type="submit">
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                    $name = htmlspecialchars($_REQUEST['fname']);
                    if (empty($name)) {
                        echo '<span class="warn">inputan kosong</span>';
                    } else {
                        echo '<span class="sukses">wow, Klub Favorit anda adalah '.$name.'</span>';
                    }
                } ?>
                </div> <?php
                $img = 0;
                $name_klub = array("Manchester United","Chelsea","Manchester City","Leicester City","Arsenal","Liverpool");
                for($klub = 0; $klub <= 4;$klub++){
                    echo '<div class="img-box">';
                    echo '<img src="img/'.$klub.'.png" class="images">';
                    echo '<p class="caption">'.$name_klub[$klub].'</p>';
                    echo '</div>';
                }
                ?>
            </div></div>
        </section>

        <?php include('footer.php')?>