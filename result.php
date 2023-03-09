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
    <title>Document</title>
</head>
<body>
    <h1>No bad words</h1>
    <h2>Il paragrafo inviato è lungo <?= $paragraph_length ?> caratteri. Quello censurato è lungo: <?=strlen($paragraph_nobadwords) ?> caratteri</h2>
    <p>Paragrafo censurato: <?= $paragraph_nobadwords ?></p>
</body>
</html>