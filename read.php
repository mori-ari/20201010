<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>データ登録</title>
</head>

<body>
<?php include('inc/header.php');?>


<div id="data">

<h1>メンバーリスト</h1>
    <ul class="nav_box">
      <a href="post.php" ><li class="nav" id="bt-left">登録画面へ</li></a>
    </ul>


<table class="table">
<tr>
    <th>登録日時</th>
    <th>アカウント</th>
    <th>名前</th>
    <th>性別</th>
    <th>生年月日</th>
    <th>メールアドレス</th>
    <th>パスワード</th>
    <th>アイコン画像</th>
</tr>




<?php
// ファイルを開く
$file = fopen('./data/data.txt','r');
// ファイル内容を1行ずつ読み込んで出力
while ($str = fgets($file)) {
    //第1=ターゲット⽂字, 第2=元の⽂字列
    $array = explode("," , $str);
    echo '<tr>';
    echo '<td class="table_border">'.$array[0].'</td>';
    echo '<td class="table_border">'.$array[1].'</td>';
    echo '<td class="table_border">'.$array[2].'</td>';
    echo '<td class="table_border">'.$array[3].'</td>';
    echo '<td class="table_border">'.$array[4].'</td>';
    echo '<td class="table_border">'.$array[5].'</td>';
    echo '<td class="table_border">'.$array[6].'</td>';
    echo '<td class="table_border" ><img width="100" class="icon" src="./upload/'.$array[7].'"></td>';
    echo '</tr>';
}
// ファイルを閉じる
fclose($file);

?>
</table>


    <ul class="nav_box">
      <a href="post.php" ><li class="nav" id="bt-left">登録画面へ</li></a>
    </ul>

    </div>

    <?php include('inc/footer.php');?>

</body>

</html>