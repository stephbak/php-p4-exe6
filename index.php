<?php
$name = 'Stéphane';
$firstname = 'BAKUM';
$age = 37;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>php partie4</title>
</head>
<body>
  <?php
  function sentence($string1, $string2, $string3){
    return 'Bonjour ' . $string1 . ' ' . $string2 . ', tu as ' . $string3 . ' ans.';
  }
  ?>
  <p><?= sentence($name, $firstname, $age) ?></p>
</body>
</html>
