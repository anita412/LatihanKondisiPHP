<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Materi Kondisi PHP</title>
</head>
<body>
    <h1>Program PHP sederhana untuk membuat sebuah penilaian rapot</h1>
    
    <?php
    $nilai = 61;
    switch ($nilai) {
        case (($nilai >= 80) && ($nilai <= 100)):
            echo "Nilai A";
            break;
        case (($nilai >= 60) && ($nilai <= 79)):
            echo "Nilai B";
            break;
        case (($nilai >= 0) && ($nilai <= 59)):
            echo "Nilai C";
            break;
        default:
            echo "Nilai Tidak Ditemukan";
            break;
    }
    ?>

</body>
</html>