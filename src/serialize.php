<!DOCTYPE html>
<html lang = "ja">
<head>
<meta charset = "UFT-8">
<title>データ送信</title>
</head>
<body>
<h1>シリアライズされたデータの送信</h1>
<form action = "deserialize.php" method = "get">
<input type = "hidden" name ="line" value=<?
include "class.php";
$var = new lsFile("file/test.txt");
echo base64_encode(serialize($var))
?> /><br/>
<input type = "submit" value ="コマンド実行パターン" />
</form>
<form action = "deserialize_destruct.php" method = "get">
<input type = "hidden" name ="line" value=<?
include_once "class.php";
$var = new lsFile("file/test.txt");
echo base64_encode(serialize($var))
?> /><br/>
<input type = "submit" value ="デストラクタパターン" />
</form>
<br/>
<a href="check.php">確認用</a><br>
</body>
</html>