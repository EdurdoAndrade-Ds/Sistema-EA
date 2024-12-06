<?php

session_start();

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {

    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM users WHERE email = '$email' and passwords = '$senha'";

    $result = $conexao->query($sql);
    // var_dump($_REQUEST);

    if (mysqli_num_rows($result) < 1) {

        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header("Location: login.php");

    } else {
        ?>
        <script type="text/javascript">
            alert("Sucesso!!!");
            window.location.href = 'sistema.php';
            </script>
        <?php
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;

    }
}