<html>
    <head>
        <title></title>
    </head>
    <body>
        <form method="get">
        <label for="nilai"> Masukkan Nilai Angka Untuk Konversi Nilai Huruf : </label><br>
        <input type="text" id="nilai" name="nilai"><br>
        <input type="submit">
        </form>
        <?php if (isset($_GET['nilai'])): ?>
        <br>
        <?php
            $nilai = $_GET['nilai'];
            if ($nilai >= 80){
                echo "Nilai A";
            } else if ($nilai <80 && $nilai >69){
                echo "B";
            } else if ($nilai <70 && $nilai >59){
                echo "C";
             } else if ($nilai <60 && $nilai >49){
                echo "D";
            } else {
                echo "E";
            }
            endif;
        ?>
    </body>
</html>