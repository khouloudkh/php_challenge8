<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8" />
    <title>My test form</form></title>
  </head>
  <body>
    <p>This is my form</p>
    <?php var_dump( $_POST); ?>
    <form action="/thanks.php" method="post">
      <div>
        <label for="name">nom :</label>
        <input type="text" id="name" name="user_name" />
      </div>
      <div>
        <label for="lastName">prénom :</label>
        <input type="text" id="lastName" name="user_lastName" />
      </div>
      <div>
        <label for="mail">e-mail&nbsp;:</label>
        <input type="email" id="mail" name="user_mail" />
      </div>
      <div>
        <label for="phone">téléphone :</label>
        <input type="tel" id="phone" name="user_phone" />
      </div>
      <div>
        <label for="subject">sujet :</label>
        <SELECT name="subject" size="1">
        <OPTION value="option 1">demande d'informations</OPTION>
        <OPTION value="option 2" selected>prise de rendez-vous</OPTION>
        <OPTION value="option 3">suivi d'instruction</OPTION>
        <OPTION value="option 4">avis sur nos services</OPTION>
        </SELECT>
      </div>
      <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message"></textarea>
        <input type="submit" name="envoyer" value="Envoyer" />
      </div>
    </form>
    
  </body>
</html>

<?php
header('Location: http://localhost:8001/thanks.php');
exit();
?>