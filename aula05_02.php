<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Aula05_02 - 09/09/2025</h1>
    <?php
    echo "<pre>";print_r($_REQUEST);echo"</pre>";
        $nome=$_POST["nome"];
        $senha=$_POST["senha"];
        $data=$_POST["data"];
        $av1=$_POST["av1"];
        $av2=$_POST["av2"];
        echo "Nome: $nome<br>";
        echo "Senha: $senha<br>";
        echo "Data: $data<br>";
        echo "Nota AV1: $av1<br>";
        echo "Nota AV2: $av2<br>";
        echo "Média: ".(($av1+$av2)/2);
        ?>
    </body>
</html>