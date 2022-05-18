<html>
    <div class="containerTopo">
        <div class="topo">
            <?php
                if ($pagina == "inicio") {
                    echo "<a href='/excrud' class='paginaAtual'>Início</a>";
                }
                else {
                    echo "<a href='/excrud' class='paginaBg'>Início</a>";
                }
                
                if ($pagina == "formjogos") {
                    echo "<a href='/excrud/formjogos' class='paginaAtual'>Cadastro Jogos</a>";
                }
                else {
                    echo "<a href='/excrud/formjogos' class='paginaBg'>Cadastro Jogos</a>";
                }
                
                if ($pagina == "tabelajogos") {
                    echo "<a href='/excrud/tabelajogos' class='paginaAtual'>Tabela Jogos</a>";
                }
                else {
                    echo "<a href='/excrud/tabelajogos' class='paginaBg'>Tabela Jogos</a>";
                }
                
                if ($pagina == "formcontatos") {
                    echo "<a href='/excrud/formcontatos' class='paginaAtual'>Cadastro Contatos</a>";
                }
                else {
                    echo "<a href='/excrud/formcontatos' class='paginaBg'>Cadastro Contatos</a>";
                }
                
                if ($pagina == "tabelacontatos") {
                    echo "<a href='/excrud/tabelacontatos' class='paginaAtual'>Tabela Contatos</a>";
                }
                else {
                    echo "<a href='/excrud/tabelacontatos' class='paginaBg'>Tabela Contatos</a>";
                }
            ?>
        </div>
    </div>
</html>