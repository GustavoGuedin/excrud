<?php
    $pagina = "inicio";
    include "topo.php";
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Início - ExCRUD</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <div class="containerIndex">
            <div class="formulario">
                <h2>Bem-vindo(a)</h2>
                <p>Seja bem-vindo(a)! Neste site você pode testar dois formulários e suas respectivas tabelas. Isso inclui incerção de dados na tabela, e exclusão / edição dos dados que já estão inseridos na mesma.</p>
                <p class="aviso">Para começar, escolha um formulário e insira algo. Só tenha certeza de não digitar nenhum dado sensível, pois o que digitar será enviado para a tabela.</p>

                <h2>Criado por...</h2>
                <div class="cardGui">
                    <img id="gui" src="zoro.jpg">
                    <div class="espaco"></div>
                    <div id="gui">
                        <h3>Guilherme Machado</h3>
                        <p class="bio">Cursando ADS no Senac.</p>
                        <div class="sociais">
                            <a href="https://www.instagram.com/guilherme_lineburger/">Instagram</a>
                            <div class="espaco"></div>
                            <a href="https://www.linkedin.com/in/guilherme-machado-lineburger-1b6912218/">LinkedIn</a>
                        </div>
                    </div>
                </div>
                <div class="cardGu">
                    <div id="gu">
                        <h3>Gustavo Guedin</h3>
                        <p class="bio">Cursando ADS no Senac. Gosto de mexer com Linux e CSS!</p>
                        <div class="sociais">
                            <a href="https://github.com/GustavoGuedin">GitHub</a>
                            <div class="espaco"></div>
                            <a href="https://www.linkedin.com/in/gustavo-guedin-009016237/">LinkedIn</a>
                        </div>
                    </div>
                    <div class="espaco"></div>
                    <img id="gu" src="ruby.jpg">
                </div>
            </div>
        </div>
    </body>
</html>