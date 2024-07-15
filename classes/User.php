<?php
include 'Database.php';
class User extends Database
//Databaseクラスから継承するUserというクラスを定義
{


  public function register($firstname, $lastname, $username, $password)
  {   
    //ユーザー登録の処理
    $password = password_hash($password, PASSWORD_DEFAULT);
  //パスワードを安全にハッシュ化
    $sql = "INSERT INTO users (first_name,last_name,username,password) VALUES ('$firstname','$lastname','$username','$password')"; //INSERTクエリを構築
    if ($this->conn->query($sql)) { //クエリを実行し、結果を処理
      header('location:../views/login.php');//ログインページをリダイレクト
      exit; //スクリプトの実行を停止
    } else {
      die('Something went wrong! Please try again later' . $this->conn->error); //エラーメッセージで終了
    }


  }

  public function login($username,$password){
    $sql = "SELECT * FROM users WHERE username = '$username' ";
    //ユーザー情報を取得するためのSELECTクエリを構築
    if($result = $this->conn->query($sql)) {
      if($result->num_rows == 1) { //ユーザーが1人だけ見つかったかどうか確認
        $user = $result->fetch_assoc();//ユーザーを連想配列として取得
         if(password_verify($password, $user["password"])) {
          //セキュリティーのためにpassword_verifyを使用して、パスワードを検証
          session_start();//ユーザー認証時に新しいセッションを開始

          $_SESSION["user_id"] = $user["id"];
          //ユーザーIDをセッションに保存
          $_SESSION["full_name"] = $user["first_name"].' '.$user['last_name'];//フルネームをセッションに保存
          header('location:../views/dashboard.php');
          //ログイン成功時にダッシュボードにリダイレクト
      }else{     //パスワードが間違っている場合
        header('location:../views/login.php');
        //ログインページにリダイレクト
        exit;
      }
      }else {  //一致するユーザーが見つからない場合
         header('location:../views/login.php');
        exit;
      }

      }else {  //クエリの実行中にエラー
        die('Something went wrong! Please try again later!'.$this->conn->error);
      }
  }
  public function getAllUsers(){
    $sql = "SELECT * FROM users";
    //データベースから情報を取得
    if($result = $this->conn->query($sql)){
        return $result;//戻り値
    }else{
        die('Something went wrong! Please try again later!' . $this->conn->error);
    }
}
public function getUser($id){
  $sql = "SELECT * FROM users WHERE id = $id";
  if($result = $this->conn->query($sql)){
      return $result->fetch_assoc();
  }else{
      die('Something went wrong! Please try again later!' . $this->conn->error);
  }
}

public function updateUser($id, $firstname, $lastname, $username){
  $sql = "UPDATE users SET first_name = '$firstname', last_name = '$lastname', username = '$username' WHERE id = $id";
  if($this->conn->query($sql)){
      header('location:../views/dashboard.php');
      exit;
  }else{
      die('Something went wrong! Please try again later!' . $this->conn->error);
  }

} 
 public function logout(){
  session_start();
  session_destroy();
  header('location:../views/login.php');
  exit;
}
public function deleteUser($id){
  $sql = "DELETE FROM users Where id = $id";
  if($this->conn->query($sql)){
     session_destroy();
     header('lacation:../views/login.php');
      exit;
  }else{
      die('Something went wrong! Please try again later!' . $this->conn->error);
  }

} 

}





















// セッションとは 複数のWebリクエストやページ訪問にわたってユーザー認証を管理し、ユーザー固有の情報を保持するための仕組みを指します.。これは、ユーザーがサイト内を移動する際に、サーバー側でユーザーを識別し、追跡できるようにする機能です。
//セッションの開始:ユーザーがログインに成功するか、認証が必要なアクションを実行したときに開始されます。

