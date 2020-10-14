<?php

$time = date("Y-m-d H:i:s");
$id =$_POST['id'];
$name =$_POST['name'];
$gender =$_POST['gender'];
$birth =$_POST['birth'];
$email =$_POST['email'];
$pass =$_POST['pass'];
$img_name =$_FILES['img']['name'];

function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

// ファイルを開く
$file = fopen('./data/data.txt', 'a');

// ファイルに書き込み
fwrite($file, h($time).","); // \nで改行。これはシングルクォーテーションでは動かない
fwrite($file, h($id).","); 
fwrite($file, h($name).","); 
fwrite($file, h($gender).",");
fwrite($file, h($birth).",");
fwrite($file, h($email).",");
fwrite($file, h($pass).",");
fwrite($file, h($img_name)."\n");
//画像を保存
move_uploaded_file($_FILES['img']['tmp_name'], './upload/' . $img_name);

// ファイルを閉じる
fclose($file);


?>


<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>登録内容確認</title>
  </head>
  <body>
  <?php include('inc/header.php');?>
    <div id="main">
    
      <h1>会員登録完了</h1>

      <p class="text">以下の内容で登録しました。</p>
   
        <table>
          <tr>
            <td class="td"><label for="id">ID</label></td>
            <td><?= $id ?></td>
        </tr>
          <tr>
            <td class="td"><label for="name">名前</label></td>
            <td><?= $name ?></td>
        </tr>
        <tr>
          <td class="td"><label for="gender">性別</label>
            <td><?= $gender ?></td>
        </tr>
      <tr>
        <td class="td"><label for="birth">生年月日</label></td>
          <td><?= $birth ?></td>
      </tr>
      <tr>
        <td class="td"><label for="email">メールアドレス</label></td>
          <td><?= $email ?></td>
          </tr>
      
        </table>

      <ul class="nav_box">
      <a href="post.php" ><li class="nav" id="bt-left">戻る</li></a>
      <a href="read.php"><li class="nav">メンバーリスト</li></a>
    </ul>
      </div>

      <?php include('inc/footer.php');?>

<html>
