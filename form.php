<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>参加者アンケート</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>説明会を受講しての感想を教えてください（架空の設定です）</h1>



<form method='post' action="receive.php">
<table>
    <tr>
      <th>アンケート記入日</th>
      <td><?php echo date("Y年m月d日")?>;</td>
    </tr>

    <tr>
      <th>お名前</th>
      <td><input name="name" type="text" required></td>
    </tr>
    <tr>
      <th>性別</th>
      <td>
      <input name="gender" type="radio" value="男性">男性
      <input name="gender" type="radio" value="女性">女性
      </td>
    </tr>
    <tr>
      <th>総合評価</th>
      <td>
      <input name="evaluation" type="radio" value="5:非常に良い">5:非常に良い
      <input name="evaluation" type="radio" value="4:良い">4:良い
      <input name="evaluation" type="radio" value="3:普通">3:普通
      <input name="evaluation" type="radio" value="2:改善点がある">2:改善点がある
      <input name="evaluation" type="radio" value="1:非常に悪い">1:非常に悪い      
      </td>
    </tr>
    <tr>
      <th>自由コメント欄</th>
      <td><textarea cols="80" rows="8" name="comment" placeholder="コメントがあればお願いします"></textarea></td>
    </tr>
    <tr>
      <td colspan="2">
        <input type="reset" value="リセッﾄ">
        <input type="submit" value="送信">
      </td>
    </tr>
  </table>

</form>



    
</body>
</html>