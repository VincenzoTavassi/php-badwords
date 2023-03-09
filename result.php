<?php 
$bad_word = $_GET["censored"];
$paragraph = $_GET["paragraph"];

$paragraph_length = strlen($paragraph);
$paragraph_nobadwords = str_replace($bad_word, '***', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <h1>Risultato</h1>
    <p>Il paragrafo inviato è lungo <strong><?= $paragraph_length ?></strong> caratteri. Quello censurato è lungo: <strong><?=strlen($paragraph_nobadwords) ?></strong> caratteri</p>
    <p><strong>Paragrafo originale:</strong> <?=$paragraph?>
    <p><strong>Paragrafo censurato:</strong> <?= $paragraph_nobadwords ?></p>
</body>
</html>