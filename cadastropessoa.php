<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/cadastropessoa.css">
</head>
<body>
    <form action="cadastropessoaexe.php" method="post">
        <fieldset>
            <h1>CADASTRO DE PESSOAS</h1>
            <button><a href="index.html">PÁGINA INICIAL</a></button>
            <button><a href="listarcliente.php">PESSOAS CADASTRADAS</a></button>
        <div class="cor">
            <label id="text" for="nomepessoa">NOME</label>
            <input  type="text" name="nomepessoa" id="nomepessoa">
        </div>
        <div class="cor">
            <label id="text" for="email">EMAIL</label>
            <input  type="text" name="email" id="email">
        </div>  
        <div class="cor">
            <label id="text" for="endereco">ENDEREÇO</label>
            <input  type="text" name="endereco" id="endereco">
        </div> 
        <div class="cor">
            <label id="text" for="bairro">BAIRRO</label>
            <input  type="text" name="bairro" id="bairro">
        </div> 

        <div>
            <label class="cor" for="cidade">CIDADE</label>
            <select name="cidade" id="cidade">
                <?php
                    include('includes/conexao.php');
                    $sql = "SELECT * FROM cidade";
                    echo $sql;
                    $result = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($result)){
                        echo "<option value='".$row['id']."'>"
                        .$row['nomecidade']."/".$row['estado']
                        ."</option>"; 
                    }
                ?>
            </select>

        </div>

        <div class="cor">
            <label id="text" for="cep">CEP</label>
            <input  type="text" name="cep" id="cep">
        </div> 
        <div>
            <button type="submit"><a>CADASTRAR</a></button>
        </div>   
        </fieldset>
    </form>
</body>
</html>