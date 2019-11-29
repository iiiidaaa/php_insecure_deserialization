<a href="serialize.php">戻る</a><br>
<?php 
include "class.php";
$filename_b64 = $_GET['line'];
$filename_unserialize = base64_decode($filename_b64);
$filename = unserialize($filename_unserialize);
print_r("シリアライズされたデータ：($filename_unserialize)");
echo "<br>";
//print($filename->execCommand())
?>