<?php
include ('../admin/conecta.php');
?>
<!DOCTYPE html>
<html>
    <head>
    
    </head>
    
    <body>
        <?php
        mysqli_set_charset($conecta,'utf8');
        $turma          = $_POST['turma'];
        if($turma == "Selecione a turma"){
            echo("Nenhum filtro selecionado");
        }else{
            $sql = mysqli_query($conecta, "SELECT * FROM solicitacao WHERE turma='$turma'");    
            $numero_linhas = mysqli_num_rows($sql);
            while ($linha = mysqli_fetch_array($sql)){
                mysqli_set_charset($conecta,'utf8'); 
                $cd_solicitacao = $linha["cd_solicitacao"];
                $nm_solicitante = $linha["nm_solicitante"];
                $turma          = $linha["turma"];
                $txt_postagem   = $linha["txt_postagem"];
                $fotos          = $linha["fotos"];
                $dt_solicitacao = $linha["dt_solicitacao"];
                echo("
                <div class='linha'>
                    <span id='cd_solicitante'> $cd_solicitacao </span>
                    <span id='nm_solicitante'>$nm_solicitante </span>
                    <span id='turma'>$turma </span>
                    <span id='txt_turma'>$txt_postagem </span>
                    <span id='fotos'>$fotos </span>
                    <span id='dt_solicitacao'>$dt_solicitacao </span>
                </div>    
                <br>");
            }   
//        echo("<script>alert('Fotos enviadas com sucesso!');");
//        header('Location: site.php');
        }
        

        ?>
    </body>
</html>
        