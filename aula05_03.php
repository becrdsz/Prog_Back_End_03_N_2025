<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulo</title>
</head>
<body>
    <form method="post" action="#">
        Nome <input type="text" name="nome"><br>
        Data <input type="date" name="data"><br>
        Nota AV1 <input type="number" name="av1"><br>
        Nota AV2 <input type="number" name="av2"><br>
        <input type="submit" value="Enviar">
</form>
<?php
    if (count($_POST)==0)exit;
    $nome=$_POST["nome"];
    $data=$_POST["data"];
    $av1=$_POST["av1"];
    $av2=$_POST["av2"];
    $media=($av1+$av2)/2;

    echo "Nome: $nome<br>";
    echo "Data: $data<br>";
    echo "Nota AV1: $av1<br>";
    echo "Nota AV2: $av2<br>";
    echo "Média: $media";
    ?>
</body>
</html>