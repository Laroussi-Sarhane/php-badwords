<?php 

$testo = $_GET['testo'];
$parola = $_GET['parola'];
$testo_parola= str_replace( $testo ,'***', $parola);
var_dump($testo_parola);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ricevo get</title>
</head>
<body>
  <div class="container">

  <div>
    <h1 > testo: <?php echo $testo; ?> </h1>
    <h2> parola: <?php echo $parola; ?> </h2>
    <p>lunghezza paragrafo: <?php echo strlen($testo) ?></p>
    <h2>paragrafo censurato: <?php echo $testo_parola; ?></h2>
    <p>lunghezza paragrafo: <?php echo strlen( $testo_parola) ?></p>

  </div>
    
  </div>
  
</body>
</html>