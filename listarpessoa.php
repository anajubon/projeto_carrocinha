<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="listarcidade.css">
</head>
<body>
    <?php
    include('includes/conexao.php');
    //$sql = "SELECT pes.id,  pes.nome nomepessoa, pes.email, pes.endereco, pes.bairro, pes.cep,
                //cid.nomecidade nomecidade, cid.estado
            //FROM pessoa pes
            //LEFT JOIN cidade cid on cid.id = cli.id_cidade";
    //retorna consulta
    $result = mysqli_query($con, $sql);
    ?>

    <h1>pessoas CADASTRADAS</h1>
    <button><a href="index.html">PÁGINA INICIAL</a></button>
    <button><a href="cadastrocliente.php">CADASTRAR CLIENTE</a></button>
   
    <table align="center" border="1" width="500"> 
        <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>ENDERECO</th>
        <th>BAIRRO</th>
        <th>CIDADE</th>
        <th>ESTADO</th>
        <th>CEP</th>
        <th>ALTERAR</th>
        <th>DELETAR</th>

        </tr>
        <?php
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nomepessoa']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['endereco']."</td>";
                echo "<td>".$row['bairro']."</td>";
                echo "<td>".$row['nomecidade']."</td>";
                echo "<td>".$row['estado']."</td>";
                echo "<td>".$row['cep']."</td>";
                echo "<td><a href='alteracliente.php?id=".$row['id']."'>ALTERAR</a></td>";
                echo "<td><a href='deletacliente.php?id=".$row['id']."'>DELETAR</a></td>";
                echo "</tr>";
            }
        ?>    
        </table>
</body>
</html>