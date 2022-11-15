<html>
    <head>
        <title>Pemrograman PHP dengan Array</title>
    </head>
    <body style="background-color: #B9E0FF;">
        <?php
        //Penulisan array dapat dibuat seperti berikut
        $nama[1] = "Gilang";
        $nama[2] = "Aditya";
        echo $nama[1].$nama[2];
        echo "<br>";
        //menghitung jumlah elemen array
        $jum_array = count($nama);
        echo "jumlah elemen array = ". $jum_array;
        ?>
    </body>
</html>