<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cadastrocliente.css">
</head>
<body>
    <form action="cadastroanimalexe.php" method="post">
        <fieldset>
            <h1>CADASTRO DE ANIMAIS</h1>
            <button><a href="index.html">PÁGINA INICIAL</a></button>
            <button><a href="listarcliente.php">ANIMAIS CADASTRADOS</a></button>
        <div class="cor">
            <label id="text" for="nomeanimal">NOME</label>
            <input  type="text" name="nomeanimal" id="nomeanimal">
        </div>
        <div class="cor">
            <label id="text" for="especie">ESPÉCIE</label>
            <input  type="text" name="especie" id="especie">
        </div>  
        <div class="cor">
            <label id="text" for="raca">RAÇA</label>
            <input  type="text" name="raca" id="raca">
        </div>  
        <div class="cor">
            <label id="date" for="datanascimento">DATA DE NASCIMENTO</label>
            <input  type="date" name="datanascimento" id="datanascimento">
        </div>  
        <div class="cor">
            <label id="text" for="ativo">SITUAÇÃO DO ANIMAL</label>
            <input type="radio" name="castrado" id="castrado" value="1">CASTRADO
            <input type="radio" name="castrado" id="castrado" value="0" checked>NÃO CASTRADO
        </div>  

        <div>
            <label for="pessoa">TUTOR</label>
            <select name="pessoa" id="pessoa">
                <?php
                    include('includes/conexao.php');
                    $sql = "SELECT * FROM pessoa";
                    echo $sql;
                    $result = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($result)){
                        echo "<option value='".$row['id']."'>"
                        .$row['nomepessoa']."</option>"; 
                    }
                ?>
            </select>

        </div>
        <div>
            <button type="submit"><a>CADASTRAR</a></button>
        </div>   
        </fieldset>
    </form>
</body>
</html>