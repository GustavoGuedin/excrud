<?php
    $pagina = "tabelajogos";
    include "../conexao.php";
    include "../topo.php";

    $sql = "SELECT cd_jogador, nm_plataforma, nm_jogo FROM jogostabela";
    $resultado=mysqli_query($conexao,$sql);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tabela Jogos - ExCRUD</title>
        <link rel="stylesheet" href="../estilo.css">
    </head>
    <body>
        <div class="containerTabela">
            <table>
                <tr>
                    <th>Código</th>
                    <th>Plataforma</th>
                    <th>Jogo</th>
                    <th>Ações</th>
                </tr>
                <div class="tabela">
                    <div class="topoTabela"></div>
                    <?php
                        while($linha = mysqli_fetch_array($resultado)) {
                            echo "<tr>";
                            echo "<td>$linha[cd_jogador]</td>";
                            echo "<td>$linha[nm_plataforma]</td>";
                            echo "<td>$linha[nm_jogo]</td>";
                            
                            echo "<td>";
                            echo "<a href='../formjogos?cd_jogador=$linha[cd_jogador]'><img src='../edit.svg' alt='Editar'></a>";
                            echo "<a href='excluir.php?cd_jogador=$linha[cd_jogador]'><img src='../delete.svg' alt='Excluir'></a>";
                            echo "</td>";
                            
                            echo "</tr>";
                        }
                        ?>
                    </div>
                </table>
            <div class="baixoTabela"></div>
        </div>
    </body>
</html>
