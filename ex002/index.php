<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
</head>
<body>
    <h1>Testando o Php</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo"); // serve para definir o local do servidor
        echo "Hoje e dia \n". date("d-m-Y"); // serve para definir a data
        echo "Agora são exatamente ".date("G:i:s T"); // serve para definir o horario 
    ?>
</body>
</html>