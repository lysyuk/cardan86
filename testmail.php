<?php
$message = '';
if (isset($_POST['email']) && !empty($_POST['email'])){
  if (mail($_POST['email'], $_POST['subject'], $_POST['body'], '')){
    $message = "Email has been sent to <b>".$_POST['email']."</b>.<br>";
  }else{
    $message = "Failed sending message to <b>".$_POST['email']."</b>.<br>";
  }
}else{
  if (isset($_POST['submit'])){
    $message = "No email address specified!<br>";
  }
}

if (!empty($message)){
  $message .= "<br><br>n";
}
?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>
      Mail test
    </title>
  </head>
  <body>

  <p>Страница для проверки работы функций email на сайте. Просто заполните поля и нажмите кнопку "Отправить проверочное письмо"</p>
    <?php echo $message; ?>
    <form method="post" action="">
      <table>
        <tr>
          <td>
            e-mail
          </td>
          <td>
            <input name="email" value="<?php if (isset($_POST['email'])
            && !empty($_POST['email'])) echo $_POST['email']; ?>">
          </td>
        </tr>
        <tr>
          <td>
            subject
          </td>
          <td>
            <input name="subject">
          </td>
        </tr>
        <tr>
          <td>
            message
          </td>
          <td>
            <textarea name="body"></textarea>
          </td>
        </tr>
        <tr>
          <td>
            &nbsp;
          </td>
          <td>
            <input type="submit" value="Отправить проверочное письмо" name="submit">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>