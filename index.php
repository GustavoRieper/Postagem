<?php
    include ('admin/conecta.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enviar Fotos</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="index.css">
        <script>
        function limite_textarea(valor) {
            quant = 300;
            total = valor.length;
            if(total <= quant) {
                resto = quant - total;
                document.getElementById('cont').innerHTML = resto;
            } else {
                document.getElementById('texto').value = valor.substr(0,quant);
            }
        }
        
        </script>
    </head>
    
    <body>
        
        <form method="POST" action="envio_foto.php" enctype="multipart/form-data">
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
            <div id="contador">
                <span id="cont">300 </span> <span id="restante">Restantes</span> <br>
            </div>
            <textarea required name="txt_postagem" maxlength="300" onkeyup="limite_textarea(this.value)" id="texto"></textarea>
            <hr>
            <br>
            <h2>Data</h2>
            <input type="date" name="dt_solicitacao" id="dt_solicitacao" required>
            <hr>
            <h2>Enviar fotos</h2>
            <input type="file" name="foto0" id="fotos" required>
            <br>
            <input type="file" name="foto1" id="fotos">
            <br>
            <input type="file" name="foto2" id="fotos">
            <br>
            <input type="file" name="foto3" id="fotos">
            <br>
            <input type="file" name="foto4" id="fotos">
            <br>
            <input type="file" name="foto5" id="fotos">
            <br>
            <input type="file" name="foto6" id="fotos">
            <br>
            <input type="file" name="foto7" id="fotos">
            <br>
            <input type="file" name="foto8" id="fotos">
            <br>
            <input type="file" name="foto9" id="fotos">
            <br>
            <hr>
            <input type="submit" value="Enviar" id="enviar">
        </form>
    </body>

</html>