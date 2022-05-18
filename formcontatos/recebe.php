<?php
    include "../conexao.php";

    $contato = $_POST['nm_contato'];
    $endereco = $_POST['end_contato'];
    $telefone = $_POST['tel_contato'];
    $email = $_POST['email_contato'];


    if(isset($_POST['cd_contato'])) {
        $sql = "UPDATE contatos SET nm_contato = '$contato', end_contato = '$endereco', tel_contato = '$telefone', email_contato = '$email'
        WHERE cd_contato = $_POST[cd_contato]";
    }

    else{
        $sql = "INSERT INTO contatos (nm_contato, end_contato, tel_contato, email_contato) VALUES('$contato','$endereco','$telefone', '$email')";
    }

    mysqli_query($conexao, $sql);
    header("location: ../tabelacontatos")
?>
