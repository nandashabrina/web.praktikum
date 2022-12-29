<?php
    $name = "mahasiswa";
    $value = "Nanda Shabrina";
    setcookie($name, $value, time()+600);

    setcookie("kelas", "MI-1E", time()+3600);
?>
<html>
    <body>
        <?php
            echo "cookies telah diubah";
        ?>
    </body>
</html>