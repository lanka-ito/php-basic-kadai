<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>課題 WEB APP</title>
</head>
<body>
  <h2>社員情報入力フォーム</h2>
  <form action="confirm.php" method="post">
    <table>
      <tr>
        <td>社員名</td>
        <td>
          <input type="text" name="employee_name">
        </td>
      </tr>
      <tr>
        <td>年齢</td>
        <td>
          <input type="text" name="employee_age">
        </td>
      </tr>
      <tr>
        <td>所属部署</td>
        <td>
          <input type="text" name="department">
        </td>
      </tr>
    </table>
   <input type="submit" value="送信">
  </form>
</body>
</html>