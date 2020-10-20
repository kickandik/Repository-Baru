<?php
$koneksi = mysqli_connect('localhost','root','','nilai_mhs');
$query = mysqli_query($koneksi, 'SELECT * FROM nilai');
while($row = mysqli_fetch_assoc($query)) {
    $data[] = $row;
}

echo json_encode($data);
?>