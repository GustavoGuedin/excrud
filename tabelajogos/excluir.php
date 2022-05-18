<?php
    include '../conexao.php';

    $codigo=$_GET['cd_jogador'];

    $sql ="DELETE FROM jogostabela Where cd_jogador = " . $codigo;

    mysqli_query($conexao,$sql);

    header("location: .");
 ?>
