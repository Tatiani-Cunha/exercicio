<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Cadastro</title>
</head>
<body>
    <main id="principal">
        <h1>Cadastro Confirmado com Sucesso</h1>
        <?php
        echo "Nome: ".$_POST['txtNome']."<br>";
        echo "Sobrenome: ".$_POST['txtSobrenome']."<br>";
        echo "Email: ".$_POST['txtEmail']."<br>";
        echo "Formação: ".$_POST['txtFormacao']."<br>";
        echo "Descrição Último Emprego: ".$_POST['txtEmprego']."<br>";

        ?>
    </main>
</body>
</html>
