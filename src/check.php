<!DOCTYPE html>
<html lang = "ja">
<head>
<meta charset = "UFT-8">
<title>文字列の確認用</title>
</head>
<body>
<a href="serialize.php">戻る</a><br>
<h1>フォームデータの送信</h1>
<?
if ($_GET["command"]){
    $command = $_GET["command"];
    $filename = $_GET["filename"];
    echo base64_encode(serialize([$command,$filename])) . "<br>";
}
?><br>
<form action = "check.php" method = "get">
<input type = "text" name ="command" /><br/>
<input type = "text" name ="filename" /><br/>
<input type = "submit" value ="送信" />
</form>
</body>
</html>