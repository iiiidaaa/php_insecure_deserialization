<!DOCTYPE html>
<html lang = "ja">
<head>
<meta charset = "UFT-8">
<title>データ送信</title>
</head>
<body>
<h1>シリアライズされたデータの送信</h1>
<form action = "deserialize.php" method = "get">
<input type = "hidden" name ="line" value=<? echo base64_encode(serialize(['cat','file/test.txt'])) ?> /><br/>
<input type = "submit" value ="送信" />
</form>
<a href="check.php">確認用</a><br>
</body>
</html>