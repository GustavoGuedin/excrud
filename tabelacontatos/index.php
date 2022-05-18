<?php
    $pagina = "tabelacontatos";
    include "../conexao.php";
    include "../topo.php";

    $sql = "SELECT cd_contato, nm_contato, end_contato,tel_contato,email_contato FROM contatos";
    $resultado=mysqli_query($conexao,$sql);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Tabela Contatos - ExCRUD</title>
        <link rel="stylesheet" href="../estilo.css">
    </head>
    <body>
        <div class="containerTabela">
            <div class="topoTabela"></div>
            <table>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
                <div class="tabela">
                    <?php
                        while($linha = mysqli_fetch_array($resultado)) {
                            echo "<tr>";

                            echo "<td>$linha[cd_contato]</td>";
                            echo "<td>$linha[nm_contato]</td>";
                            echo "<td>$linha[end_contato]</td>";
                            echo "<td>$linha[tel_contato]</td>";
                            echo "<td>$linha[email_contato]</td>";
                            
                            echo "<td>";
                            echo "<a href='../formcontatos?cd_contato=$linha[cd_contato]'><img src='../edit.svg' alt='Editar'></a>";
                            echo "<a href='excluir.php?cd_contato=$linha[cd_contato]'><img src='../delete.svg' alt='Excluir'></a>";
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
