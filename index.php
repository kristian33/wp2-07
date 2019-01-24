
<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<table>
  <?php
  for ($i=0; $i < 10 ; $i++) {
?><tr><?php
    for ($j=0; $j < 10 ; $j++) {
      ?><td><?php
      echo rand(0,100);
      ?></td><?php
    }
?></tr><?php
  }
    ?>
  </table>
  </body>
  </html>