<?php
    include ('admin/conecta.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enviar Fotos</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    
    <body>
        
        <form method="POST" action="envio_foto.php">
            <img src="http://escola.ielusc.br/BancoArquivos/INST/CONTEUDO/imagens/bom_jesus_ielusc_colorido(1).png">
            <h1>Envar fotos para postagem</h1>
            <h2>Nome da Professora</h2>
            <input type="text" name="nm_solicitante" required>
            <br>
            <hr>
            <h2>Turma</h2>
            <select required name="turma">
                <option>Selecione a turma</option>
                <?php
                        mysqli_set_charset($conecta,'utf8'); 
                        $sql = "SELECT ds_turma FROM turmas"; 
                        $resultado = mysqli_query($conecta,$sql);
                        $numero_linhas = mysqli_num_rows($resultado);
                        while ($linha = mysqli_fetch_array($resultado)){
                            $cd_turma = $linha["ds_turma"];
                            echo("<option>$cd_turma</option>");
                        }
                    ?>
            </select>
            <hr>
            <h2>Texto para postagem</h2>
            <textarea required name="txt_postagem"></textarea>
            <hr>
            <br>
            <h2>Data</h2>
            <input type="date" name="dt_solicitacao" id="dt_solicitacao" required>
            <hr>
            <h2>Enviar fotos</h2>
            <input type="file" multiple name="fotos" id="fotos" required>
            <br><br><br>
            <hr>
            <input type="submit" value="Enviar" id="enviar">
        </form>
    </body>

</html>