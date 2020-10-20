<?php
$url = 'http://localhost/nilai_mhs/provider';
$data = file_get_contents($url); // variabel konten
$obj = json_decode($data);
foreach ($obj as $nilai) {

}
?>
<!DOCTYPE html>  
 <html>  
      <head>  
           <style>
  table {
   width: 100%; 
  }
  table tr td {
   padding: 1rem;
  }

  
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}


@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }  
  
}

 </style>

      </head>  
      <body> 

<div style="text-align: center;">
  <h1>FAKULTAS TEKNOLOGI INFORMASI UNIVERSITAS STIKUBANK SEMARANG</h1>
  <p>PROGRAM STUDI S1-SISTEM INFORMASI</p>
  <p>Daftar Nilai Mahasiswa</p>
</div>	  	  
	  
           <table border="1">
	<tr>
	<td align="center">Nim</td>	
	<td align="center">Kode Makul</td>
	<td align="center">Nilai Tugas</td>
	<td align="center">Nilai UTS</td>
	<td align="center">Nilai UAS</td>
	</tr>
	<?php 
	foreach ($obj as $nilai) {
		echo '<tr>
		    <td>'.$nilai->Nim.'</td>
			<td>'.$nilai->Kd_Makul.'</td>
			<td>'.$nilai->Nilai_Tugas.'</td>
			<td>'.$nilai->Nilai_UTS.'</td>
			<td>'.$nilai->Nilai_UAS.'</td>			
			</tr>';
	}
	?>
</table>
 
      </body>  
 </html>  