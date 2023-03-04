<?php
if(isset($_GET['submit'])){
    $nama = $_GET['nama'];
    $matkul = $_GET['matkul'];
    $uts = $_GET['uts'];
    $uas = $_GET['uas'];
    $praktikum = $_GET['praktikum'];
    $rata = round(($uts + $uas + $praktikum) / 3, 2);
    $grade = '';
  
    switch (true) {
      case ($rata >= 85 && $rata <= 100):
        $grade = 'A';
        break;
      case ($rata >= 70 && $rata < 84):
        $grade = 'B';
        break;
      case ($rata >= 56 && $rata < 69):
        $grade = 'C';
        break;
      case ($rata >= 36 && $rata < 55):
        $grade = 'D';
        break;
      case ($rata >= 0 && $rata < 35):
        $grade = 'E';
        break;
      default:
        $grade = 'I';
        break;
    }
  
    echo "Nama: $nama <br>";
    echo "Mata Kuliah: $matkul <br>";
    echo "Nilai UTS: $uts <br>";
    echo "Nilai UAS: $uas <br>";
    echo "Nilai Praktikum: $praktikum <br>";
    echo "Rata: $rata <br>";
    echo "Grade: $grade";
  } else {
    echo "Tidak ada data!";
  }