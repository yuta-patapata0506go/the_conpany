<?php //PHPスクリプトの開始

$first_name =$_POST['first_name'];
$last_name =$_POST['last_name'];
$username =$_POST['username'];
$password =$_POST['password'];
//スーパーグローバル変数を使用して、フォーム送信からの値を取得する
print_r($_POST); //$POST配列全体を出力

include '../classes/User.php';//../classes/User.php'のファイルからコードを取り込む
$user = new User();//Userクラスの新しいインスタンス（オブジェクト）を作成。Userクラスのオブジェクトやメソッドにアクセスできる

$user->register($first_name,$last_name,$username,$password);
//userクラス内に定義されているregisterメソッドを使用して、登録プロセスを処理する




