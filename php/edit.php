<?php

    if(!empty($_GET['id'])) 
    {
        include_once('../php/config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM users WHERE id=$id";

        $querySelect = $conexao->query($sqlSelect) or die("Error ao consultar user");

        $result = $conexao->query($sqlSelect);

        // print_r($result);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['firstName'];
                $email = $user_data['email'];
                $password = $user_data['passwords'];
                $telefone = $user_data['telefone'];
                $genero = $user_data['sexo'];
                $data_nasc = $user_data['data_nasc'];
                $cidade = $user_data['cidade'];
                $estado = $user_data['estado'];
                $endereco = $user_data['endereco'];
            }
        } else {
            header("Location: ../php/sistema.php");
        }

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
<a href="../php/sistema.php">Voltar</a>

    <div class="box">
        <form action="form.php" method="post">
            <fieldset>
                <legend><b>Editar Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="name" id="name" class="inputUser" required value="<?php echo $nome; ?>">
                    <label for="name" class="labelInput" >Nome completo</label>
                </div>

                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required value="<?php echo $email; ?>">
                    <label for="email" class="labelInput" >Email</label>
                </div>

                <div class="inputBox">
                    <input type="passwords" name="passwords" id="passwords" class="inputUser" required value="<?php echo $password; ?>">
                    <label for="passwords" class="labelInput">Senha</label>
                </div>

                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required value="<?php echo $telefone; ?>">
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>

                <p>Sexo:</p>
                    <input type="radio" name="genero" id="feminino" value="feminino" value="<?php echo $genero == 'feminino' ? 'checked' : '' ?>" required >
                    <label for="feminino">Feminino</label>
                    <br>
                    <input type="radio" name="genero" id="masculino" value="masculino" value="<?php echo $genero == 'masculino' ? 'checked' : '' ?>" required >
                    <label for="masculino">Masculino</label>
                    <br>
                    <input type="radio" name="genero" id="outro" value="outro" value="<?php echo $genero == 'outro' ? 'checked' : '' ?>" required >
                    <label for="outro">Outro</label>
                    <br>


                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required value="<?php echo $data_nasc; ?>">


                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required value="<?php echo $cidade; ?>">
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>

                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required value="<?php echo $estado; ?>">
                    <label for="estado" class="labelInput">Estado</label>
                </div>

                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required value="<?php echo $endereco; ?>">
                    <label for="endereco" class="labelInput">Endereco</label>
                </div>

                <input type="submit" name="update" id="update" value="Edit">
            </fieldset>
        </form>
    </div>
</body>

</html>