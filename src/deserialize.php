<a href="serialize.php">戻る</a><br>
<?php 
$filename_b64 = $_GET['line'];
$filename_unserialize = base64_decode($filename_b64);
$filename = unserialize($filename_unserialize);
print_r("unserialize:" . $filename_unserialize);
echo "<br>";
echo $filename[0] . " " . $filename[1] . "<br>";
exec($filename[0] . " " . $filename[1],$output);
for($i = 0 ; $i < count($output); $i++){
    echo $output[$i]."<br>" ;
}
?>