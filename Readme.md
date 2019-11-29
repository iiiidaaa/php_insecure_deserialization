# これは何？
OWASP Evening Okinawa #14 で発表するOWASP Top 10 - 2017 A8:安全でないデシリアライゼーションのサンプルです

# 立ち上げ方
```bash
docker run -d -p 80:80 -v $(pwd)/src:/var/www/html --name owasp2017-a8 php:apache
```

# 使い方
http://localhost/serialize.php にアクセスします
送信ボタンを押すと、あるクラスがシリアライズされ、base64化されて送信されます。
POSTされた遷移先では、以下の３つの文字列が表示されます。
- GETパラメータlineがbase64デコードされた文字列(シリアライズされた文字列)
- 上のパラメータをクラスに直し(unserialize)、配列の要素二つ
- クラスのメソッドを実行した結果(OSコマンドが実行される)

一見少し攻撃しにくいように見えますが、間違いなく任意のOSコマンドを実行が可能な脆弱性が存在しています。
上のURLのページから確認用のリンクに遷移して、送信されるコマンドを自作して実際に攻撃をできるか確認しましょう。

# 削除方法
```bash
docker stop owasp2017-a8
docker rm owasp2017-a8
```