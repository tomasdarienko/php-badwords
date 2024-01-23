<?php

$paragrafo = $_GET['paragrafo'];
$censura = $_GET['censura'];
$censurato = str_replace($censura, "***", $paragrafo)
     ?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=, initial-scale=1.0">
     <title>Document</title>
</head>

<body>

     <h2>testo originale e lunghezza </h2>
     <p>
          <?php echo $paragrafo ?>
     </p>
     <div> luenghezza:
          <?php echo strlen($paragrafo) ?>
     </div>

     <h2>testo censurato</h2>
     <p>
          <?php echo $censurato ?>
     </p>
     <div> luenghezza:
          <?php echo strlen($censurato) ?>
     </div>
</body>

</html>