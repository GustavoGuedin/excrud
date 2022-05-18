<?php
    include '../conexao.php';

    $plataforma = $_POST['nm_plataforma'];
    $jogo = $_POST['nm_jogo'];

    if (isset($_POST['cd_jogador'])) {
        $sql = "UPDATE jogostabela SET nm_plataforma = '$plataforma', nm_jogo='$jogo'
        WHERE cd_jogador = $_POST[cd_jogador]";
    }

    else{
        $sql = "INSERT INTO jogostabela(nm_plataforma , nm_jogo) VALUES('$plataforma','$jogo')";
    }

    mysqli_query($conexao,$sql);

    header("location: /excrud/tabelajogos");
?>
