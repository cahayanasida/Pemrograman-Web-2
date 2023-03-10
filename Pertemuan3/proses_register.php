<?php
function kategori_skill($skor) {
    if ($skor >= 100 && $skor < 150) {
        return "Sangat Baik";
    } elseif ($skor >= 60  && $skor < 100) {
        return "Baik";
    } elseif ($skor >= 40 && $skor < 60) {
        return "Cukup";
    } elseif ($skor >= 0 && $skor < 40) {
        return "Kurang";
    } else {
        return "Tidak Memadai";
    }
}

if(isset($_POST['submit'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $major = $_POST['prodi'];
    $skills = $_POST['skill'];
    $domisilis = $_POST['domisili'];

    function skor_skill($skills){
        $skills_list = [
            'HTML' => 10,
            'CSS' => 10,
            'JavaScript' => 20,
            'RWD Bootstrap' => 20,
            'PHP' => 30,
            'Python' => 30,
            'Java' => 50,
        ];

        $result = 0;
        foreach($skills as $skill){
            $result = $result + $skills_list[$skill];
        }

        return $result;
    }

    $skor_skill = skor_skill($skills);
    $kategori_skill = kategori_skill($skor_skill);

    echo "NIM: $nim";
    echo "<br> Nama: $nama";
    echo "<br> Jenis Kelamin: $gender";
    echo "<br> Program Studi: $major";
    echo "<br> Skill Programming: ";
    foreach($skills as $skill){
        echo $skill . ", ";
    }
    echo "<br> Domisili: $domisilis";
    echo "<br> Skor Skill: $skor_skill";
    echo "<br> Kategori Skill: $kategori_skill";
}