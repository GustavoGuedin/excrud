<?php
    $pagina = "formcontatos";
    include "../conexao.php";
    include "../topo.php";

    if(isset($_GET['cd_contato'])){
        $sql = "SELECT cd_contato, nm_contato ,end_contato,tel_contato,email_contato FROM contatos WHERE cd_contato = $_GET[cd_contato]";
        $contato= mysqli_fetch_array(mysqli_query($conexao,$sql));
    }
?>

<html>
    <head>
        <meta carset="utf-8">
        <title>Cadastro Contatos - ExCRUD</title>
        <link rel="stylesheet" href="../estilo.css">
    </head>
    <body>
        <form method="post" action="recebe.php">
    
        <div class="containerForm">
            <div class="formulario">
                <h2>Contatos</h2>

                <?php
                    if(isset($_GET['cd_contato'])){
                        echo "<input type='text' name = 'cd_contato' value='$_GET[cd_contato]' readonly= ' readonly'>";
                    }
                ?>

                <input type="text" name="nm_contato" placeholder="Nome" value ="<?php if (isset($contato['nm_contato'])) { echo $contato['nm_contato']; } ?>">
                
                <Input type = "text" name ="end_contato" placeholder="Endereço" value ="<?php if(isset($contato['end_contato'])) {echo $contato['end_contato'];}?>">
                
                <Input type = "text" name ="tel_contato" placeholder="Telefone" value ="<?php if(isset($contato['tel_contato'])) {echo $contato['tel_contato'];}?>">
                
                <Input type = "text" name ="email_contato" placeholder="E-mail" value ="<?php if(isset($contato['email_contato'])) {echo $contato['email_contato'];}?>">
                
                <label for="enviar">Enviar</label>
                <input type="submit"value="Enviar" id="enviar">
            </div>
        </div>
    </body>
</html>
