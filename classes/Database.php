<?php

class Database {  //データーベースという新しいクラスを定義
  private $servername = 'localhost'; //データーベースサーバーのホスト名、IPアドレスを格納
  private $username = 'root'; //データベースアクセス用のユーザー名を保持
  private $password = 'root';  //データベースアクセス用のパスワードを含む
  private $dbname = 'the_company'; //接続するデータベースの名前を指定
  public $conn;

  public function __construct(){
    $this->conn = new mysqli($this->servername, $this->username,$this->password, $this->dbname);
    //提供された認証情報($this->severname,$this->username,$this->password)を使用してmysqliオブジェクトを作成
    //コンストラクタは通常、初期化タスクとして使用される
    if ($this->conn->connect_error) {
      die("Connection failed: ". $this->conn->connect_error);
  }
  //もしエラーが起きたらスクリプトは終了し、エラーメッセージを表示
}
}