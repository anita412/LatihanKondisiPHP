<?php 
$mobil = 'Bagus'; 
switch ($mobil)  { 
    case 'Bagus': 
        echo 'Mesin Bagus dan Body Bagus'; 
        break; 
    case 'Menengah': 
        echo 'Mesin Bagus/Body Bagus'; 
        break; 
    case 'Jelek': 
        echo 'Mesin dan Body Jelek'; 
        break; 
    default: 
        echo 'Mobil Anda Berhasil Dinilai'; 
        break; 
} 
?>