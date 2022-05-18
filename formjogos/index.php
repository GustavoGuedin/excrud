<?php
    $pagina = "formjogos";
    include "../topo.php";
    include "../conexao.php";
    
    if(isset($_GET['cd_jogador'])){
        $sql = "SELECT cd_jogador, nm_plataforma, nm_jogo FROM jogostabela WHERE cd_jogador = $_GET[cd_jogador]";
        $pessoa = mysqli_fetch_array(mysqli_query($conexao,$sql));
    }
?>

<html>
    <head>
        <meta carset="utf-8" >
        <title>Cadastro Jogos - ExCRUD</title>
        <link rel="stylesheet" href="../estilo.css">
    </head>
    <body>
        
        <div class="containerForm">
            <div class="formulario">
                <h2>Jogos</h2>
                <form method="post" action="recebe.php">

                <?php
                if(isset($_GET['cd_jogador'])){
                    echo "<input type='text' name='cd_jogador' value='$_GET[cd_jogador]' readonly='readonly'>";
                }
                ?>

                <input type="text" name="nm_plataforma" placeholder="Nome da plataforma (console)" value ="<?php if (isset($pessoa['nm_plataforma'])) { echo $pessoa['nm_plataforma']; } ?>">

                <Input type = "text" name ="nm_jogo" placeholder="Nome do jogo" value ="<?php if(isset($pessoa['nm_jogo'])) {echo $pessoa['nm_jogo'];}?>">
                

                <label for="enviar">Enviar</label>
                <input type="submit" value="Enviar" id="enviar">

            </div>
        </div>

    </body>
</html>