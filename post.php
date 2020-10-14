<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>新規会員登録</title>
      <style>

      </style>
  </head>
  <body>
<?php include('inc/header.php');?>

    <div id="main">

      <h1>新規会員登録</h1>
     


      <form action="write.php" method="post" enctype="multipart/form-data">
        <table>
          <tr>
            <td class="td"><label for="id">ID</label></td>
            <td><input type="text" placeholder="半角英数で入力" class="width" id="id" name="id" required></td>
        </tr>
          <tr>
            <td class="td"><label for="name">名前</label></td>
            <td><input type="text" placeholder="プロフィールに表示されます" class="width" id="name" name="name" required></td>
        </tr>
        <tr>
          <td class="td"><label for="name">性別</label>
            <td><input type="radio" name="sex" value="女性">女性
              <input type="radio" name="sex" value="男性">男性
                <input type="radio" name="sex" value="その他">その他</td>
        </tr>
      <tr class="tr">
        <td class="td"><label for="birth">生年月日</label></td>
          <td>
            <input type="text" placeholder="例:19900101(半角数字8桁)" maxlength="8" class="width" id="birth" name="birth" required>
          </td>
      </tr>
      <tr>
        <td class="td"><label for="email">メールアドレス</label></td>
          <td>
            <input type="mail" placeholder="例:test@test.jp" class="width" id="email" name="email" required><br>
          </td>
          </tr>
        <tr>
          <td class="td"><label for="pass">パスワード</label></td>
            <td><input type="password" placeholder="半角英数8桁以上" class="width" id="pass" name="pass" required></td>
          </tr>
          <tr>
            <td class="td"><label for="pass_re">パスワード(確認)</label></td>
              <td><input type="password" placeholder="半角英数8桁以上" class="width" id="pass_re" name="pass_re" required></td>
            </tr>
      <tr>
        <td class="td"><label for="icon">アイコン画像</label></td>
        <td><input type="file" name="img" id="img"/></td>
          </tr>
          <tr>
            <td class="td"><label for="icon"></label></td>
            <td><div id="preview_area"><img src="./img/icon.png" class="icon" alt="アイコン"></div></td>
        </tr>

        </table>
        <div><input id="submit" type="submit" value="送信"></div>
      </form>

      </div>

      <?php include('inc/footer.php');?>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

  <script>
    $('#img').on('change', function(){ 
      let strFileInfo = $('#img')[0].files[0]; 
      if(strFileInfo && strFileInfo.type.match('image.*')){ 
  
        $('#preview').remove(); 
        $('#preview_area').empty(); 
        $('#preview_area').append('<img id="preview" class="icon" alt="アイコン">'); 
  
        fileReader = new FileReader();
        fileReader.onload = function(event){
          $('#preview').attr('src', event.target.result);
        }  
        fileReader.readAsDataURL(strFileInfo);
      }
    });
</script>

  </body>
</html>

