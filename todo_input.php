<?php

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

// 参照はSELECT文!
$sql = 'SELECT * FROM todo_table2; ORDER BY deadline ASC';

$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

if ($status==false) {
  $error = $stmt->errorInfo();
  exit('sqlError:'.$error[2]);
  } else {
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $output = "";
  foreach ($result as $record) {
  $output .= "<tr>";
  $output .= "<td>{$record["deadline"]}</td>";
  $output .= "<td>{$record["todo"]}</td>";
  $output .= "<td>{$record["movie_summary"]}</td>";
  $output .= "<td>{$record["problem"]}</td>";
  $output .= "</tr>";
  }
  }


?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>悩み掲示板</title>
</head>

<body>
  <form action="todo_create.php" method="POST">
    <fieldset>
      <legend>悩み掲示板</legend>
      <div>
        動画タイトル: <input type="text" name="todo">
      </div>
      <div>
        日付: <input type="date" name="deadline">
      </div>
      <div>
      <div>
        問題のジャンル: <input type="text" name="movie_summary">
      </div>
      <div>
      <div>
        相談したい内容: <input type="text" name="problem">
      </div>
      <div>
        <button>投稿する</button>
      </div>
      

    </fieldset>
  </form>

  <fieldset>
    <legend>過去の悩み履歴</legend>
    <table>
      <thead>
        <tr>
          <th>日付</th>
          <th>動画タイトル</th>
          <th>問題のジャンル</th>
          <th>具体的な内容</th>
        </tr>
      </thead>
      <tbody>
        <!-- ここに<tr><td>deadline</td><td>todo</td><tr>の形でデータが入る -->
        <?= $output ?>
      </tbody>
    </table>
  </fieldset>

  <fieldset>
  <form method="post" action="todo_create.php">
        名前   <input type="text" name="name">
        メッセージ <input type="text" name="message">
 
        <button name="send" type="submit">送信</button>
  </form>
  </fieldset>

<script>
  
  const hoge = <?= json_encode($result) ?>;
  console.log(hoge);

</script>

</body>

</html>