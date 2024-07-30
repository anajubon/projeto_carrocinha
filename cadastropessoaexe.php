<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('includes/conexao.php');
    $nomepessoa = $_POST['nomepessoa'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $cep = $_POST['cep'];
    echo "<h1>dados da pessoa</h1>";
    echo "nomepessoa: $nomepessoa <br>";  
    echo "email: $email <br>";  
    echo "endereco: $endereco <br>"; 
    echo "bairro: $bairro <br>";
    echo "cidade: $cidade <br>";
    echo "cep: $cep <br>";
    
    $sql = "INSERT INTO pessoa (nomepessoa, email, endereco, bairro, id_cidade, cep)";
    $sql.= "VALUES('".$nomepessoa."', '".$email."', '".$endereco."', '".$bairro."', '".$cidade."', '".$cep."')";

    echo $sql;
 

    $result = mysqli_query($con, $sql);
    if($result){
        echo"<h2>dados cadastrados com sucesso!</h2>";
    }
    else{
        echo"<h2>erro ao cadastrar</h2>";
        echo mysqli_error($con);
    }
    
    ?>
</body>
</html>