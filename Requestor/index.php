<?php
$json_data=file_get_contents("http://localhost/nilai_mhs/provider");
$obj = json_decode($json_data);
echo "<pre>";
print_r($obj);
echo "</pre>";

foreach($obj as $nilai) {
    echo $nilai->Nim;
    echo "<br>";
    echo $nilai->Kd_Makul;
    echo "<br>";
    echo $nilai->Nilai_Tugas;
    echo "<br>";   
    echo $nilai->Nilai_UTS;
    echo "<br>";
    echo $nilai->Nilai_UAS;
    echo "<br>";
}
?>