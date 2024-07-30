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
    $nomeanimal = $_POST['nomeanimal'];
    $especie = $_POST['especie'];
    $raca = $_POST['raca'];
    $castrado = $_POST['castrado'];
    $datanascimento=$_POST['datanascimento'];
    $datadehoje = date_create();
    $idade = date_diff($datanascimento, $datadehoje);
    $pessoa = $_POST['pessoa'];
    echo "<h1>dados do animal</h1>";
    echo "nomeanimal: $nome <br>";  
    echo "especie: $email <br>";  
    echo "raca: $senha <br>"; 
    echo "castrado: $ativo <br>";
    echo "data nascimento: $datanascimento <br>";
    echo "idade: $idade <br>";
    echo "tutor: $pessoa <br>";
    
    $sql = "INSERT INTO animal (nomeanimal, especie, raca, castrado, datanascimento, idade, id_pessoa)";
    $sql.= "VALUES('".$nomeanimal."', '".$especie."', '".$raca."', '".$castrado."', '".$datanascimento."', '".$idade."', '".$pessoa."')";

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