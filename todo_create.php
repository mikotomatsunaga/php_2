<?php
// var_dump($_POST);
// exit();

if (
  !isset($_POST['todo']) || $_POST['todo']=='' ||
  !isset($_POST['deadline']) || $_POST['deadline']=='' ||
  !isset($_POST['movie_summary']) || $_POST['movie_summary']=='' ||
  !isset($_POST['problem']) || $_POST['problem']=='' ||
  !isset($_POST['name']) || $_POST['name']=='' ||
  !isset($_POST['message']) || $_POST['message']=='' 
  
  ) {
  exit('ParamError');
  }

// データを変数に格納
$todo = $_POST['todo'];
$deadline = $_POST['deadline'];
$movie_summary = $_POST['movie_summary'];
$problem = $_POST['problem'];
$name = $_POST['name'];
$message = $_POST['message'];





// DB接続情報
$dbn = 'mysql:dbname=gsacf_l05_11;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = '';

// DB接続
try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit();
}

// SQL作成&実行
$sql = 'INSERT INTO todo_table2(id, todo, deadline, movie_summary, problem, created_at, updated_at name, message) VALUES(NULL, :todo, :deadline, :movie_summary, :problem, sysdate(), sysdate :name, :message())';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':todo', $todo, PDO::PARAM_STR);
$stmt->bindValue(':deadline', $deadline, PDO::PARAM_STR);
$stmt->bindValue(':movie_summary', $movie_summary, PDO::PARAM_STR);
$stmt->bindValue(':problem', $problem, PDO::PARAM_STR);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':message', $message, PDO::PARAM_STR);


$status = $stmt->execute(); // SQLを実行

// 失敗時にエラーを出力し,成功時は登録画面に戻る
if ($status==false) {
  $error = $stmt->errorInfo();
  // データ登録失敗次にエラーを表示
  exit('sqlError:'.$error[2]);
  } else {
  // 登録ページへ移動
  header('Location:todo_input.php');
  }
