<?php
include ('admin/conecta.php');
?>
<!DOCTYPE html>
<html>
    <head>
    
    </head>
    
    <body>
        <?php
        mysqli_set_charset($conecta,'utf8'); 
        $nm_solicitante = $_POST['nm_solicitante'];
        $turma          = $_POST['turma'];
        $txt_postagem   = $_POST['txt_postagem'];
        $dt_solicitacao = $_POST['dt_solicitacao'];
        $fotos          = $_POST['fotos'];

        
        
        $sql = mysqli_query($conecta, "INSERT INTO solicitacao(nm_solicitante, turma, txt_postagem, dt_solicitacao, fotos) VALUE ('$nm_solicitante', '$turma', '$txt_postagem', '$dt_solicitacao', '$fotos')");

        echo("<script>alert('Fotos enviadas com sucesso!');");
        header('Location: index.php');



        ?>
    </body>
</html>
        