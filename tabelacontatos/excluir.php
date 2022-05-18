<?php
    include "../conexao.php";

    $codigo=$_GET['cd_contato'];

    $sql = "DELETE FROM contatos WHERE cd_contato = $codigo";

    mysqli_query($conexao,$sql);

    header("location: .");
?>
