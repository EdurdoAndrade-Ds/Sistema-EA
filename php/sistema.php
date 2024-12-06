<?php
session_start();
include_once('config.php');

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header("location: login.php");
}

$logado = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Sistema</title>
</head>

<body>

    <nav class="navbar navbar-light bg-light">
        <div class="container">Sistema | EA

            <!-- Form Pesquisa navBar -->
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            <a class="navbar-brand" href="logout.php"><img src="../css/img/exit.png" alt=""></a>
        </div>
    </nav>

    <h4 id="h4">Acesosu o Sistema:
        <?php echo $logado; ?>
    </h4>

    <?php
    $sql = "SELECT * FROM users ORDER BY id DESC";
    $result = $conexao->query($sql);
    ?>

    <div class="">

        <table class="table text-white table md-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Senha</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Data Nascimento</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Endereco</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($userData = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $userData['id'] . "</td>";
                    echo "<td>" . $userData['firstName'] . "</td>";
                    echo "<td>" . $userData['email'] . "</td>";
                    echo "<td>" . $userData['passwords'] . "</td>";
                    echo "<td>" . $userData['telefone'] . "</td>";
                    echo "<td>" . $userData['sexo'] . "</td>";
                    echo "<td>" . $userData['data_nasc'] . "</td>";
                    echo "<td>" . $userData['cidade'] . "</td>";
                    echo "<td>" . $userData['estado'] . "</td>";
                    echo "<td>" . $userData['endereco'] . "</td>";
                    echo "<td>
                        <a class='btn btn-sm btn-primary' href='edit.php?id=$userData[id]'>
                            <svg class='svg-edit' xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-brush' viewBox='0 0 16 16'>
                                <path d='M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.1 6.1 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.1 8.1 0 0 1-3.078.132 4 4 0 0 1-.562-.135 1.4 1.4 0 0 1-.466-.247.7.7 0 0 1-.204-.288.62.62 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896q.19.012.348.048c.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04M4.705 11.912a1.2 1.2 0 0 0-.419-.1c-.246-.013-.573.05-.879.479-.197.275-.355.532-.5.777l-.105.177c-.106.181-.213.362-.32.528a3.4 3.4 0 0 1-.76.861c.69.112 1.736.111 2.657-.12.559-.139.843-.569.993-1.06a3 3 0 0 0 .126-.75zm1.44.026c.12-.04.277-.1.458-.183a5.1 5.1 0 0 0 1.535-1.1c1.9-1.996 4.412-5.57 6.052-8.631-2.59 1.927-5.566 4.66-7.302 6.792-.442.543-.795 1.243-1.042 1.826-.121.288-.214.54-.275.72v.001l.575.575zm-4.973 3.04.007-.005zm3.582-3.043.002.001h-.002z'/>
                            </svg>
                        </a></td>";
                }

                ?>
            </tbody>
        </table>
    </div>

</body>

</html>

<?php

