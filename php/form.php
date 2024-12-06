<?php

    if(isset($_POST['submit'])) {
        // var_dump($_POST['name']);
        // var_dump($_POST['email']);
        // var_dump($_POST['password']);
        // var_dump($_POST['telefone']);
        
        // var_dump($_POST['genero']);
        // var_dump($_POST['data_nascimento']);

        // var_dump($_POST['cidade']);
        // var_dump($_POST['estado']);
        // var_dump($_POST['endereco']);

        include_once('../php/config.php');

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['passwords'];
        $telefone = $_POST['telefone'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];
    
        $result = mysqli_query($conexao, "INSERT INTO users(firstName,email,passwords,telefone,data_nasc,cidade,estado,endereco)
        VALUES ('$name','$email','$password','$telefone','$data_nasc','$cidade','$estado','$endereco')");
    } else {
        // echo 'nao enviado';
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleForm.css">
    <title>Formulario</title>
</head>

<body>
<a href="../home.php">Voltar</a>

    <div class="box">
        <form action="form.php" method="post">
            <fieldset>
                <legend><b>Formulario de clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="name" id="name" class="inputUser" required>
                    <label for="name" class="labelInput">Nome completo</label>
                </div>

                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>

                <div class="inputBox">
                    <input type="passwords" name="passwords" id="passwords" class="inputUser" required>
                    <label for="passwords" class="labelInput">Senha</label>
                </div>

                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>

                <!-- <p>Sexo:</p>
                    <input type="radio" name="genero" id="feminino" value="feminino" required>
                    <label for="feminino">Feminino</label>
                    <br>
                    <input type="radio" name="genero" id="masculino" value="masculino" required>
                    <label for="masculino">Masculino</label>
                    <br>
                    <input type="radio" name="genero" id="outro" value="outro" required>
                    <label for="outro">Outro</label>
                    <br> -->


                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>


                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>

                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>

                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereco</label>
                </div>

                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>

</html>