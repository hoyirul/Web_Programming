<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <?php
  $hari	= date("d");
  $bulan	= date ("m");
  $tahun	= date("Y");
  $jumlahhari=date("t",mktime(0,0,0,$bulan,$hari,$tahun));
  ?>
  <table border="1">
    <tr bgcolor="#ADD8E6">
      <td align=center>
        <font color="#FF0000">Minggu</font>
      </td>
      <td>Senin</td>
      <td>Selasa</td>
      <td>Rabu</td>
      <td>Kamis</td>
      <td>Jumat</td>
      <td>Sabtu</td>
    </tr>
    <?php
  $s=date ("w", mktime (0,0,0,$bulan,1,$tahun));
   
  for ($ds=1;$ds<=$s;$ds++) {
  echo "<td></td>";
  }
   
  for ($d=1;$d<=$jumlahhari;$d++) {
   
    if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 0) {
      echo "<tr>"; 
      }
  $warna="#000000"; // warna default
   
  if (date("l",mktime (0,0,0,$bulan,$d,$tahun)) == "Sunday") { $warna="#FF0000"; }
  echo "<td align=center valign=middle> <span style=\"color:$warna\">$d</span></td>"; 
  if (date("w",mktime (0,0,0,$bulan,$d,$tahun)) == 6) { echo "</tr>"; }
  }
  echo '</table>'; 
  ?>
</body>

</html>