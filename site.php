<!DOCTYPE html>
<html>
    <head>
        <title>Painel de Controle - Postagens</title>
        <link rel="stylesheet" type="text/css" href="../css/index.css">
        <link rel="stylesheet" type="text/css" href="../css/padroes/menu_lateral.css">
        <link rel="stylesheet" type="text/css" href="../css/site.css">
    </head>
    
    <body>
        <?php include 'link_padroes/menu_lateral.php' ?>
        <div class="buscas">
            <form method="post" action="filtro.php">
                <h2>Filtrar por turma:</h2>
                <select name="turma">
                    <option>Berçário</option>
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
                <input type="submit" value=" Filtrar">
            </form>
        </div>
        <div class="conteudo">                
                <?php
                    include ('filtro.php');
            
            
            
            
            
            
//                    mysqli_set_charset($conecta,'utf8'); 
//                    $sql = "SELECT * FROM solicitacao"; 
//                    $resultado = mysqli_query($conecta,$sql);
//                    $numero_linhas = mysqli_num_rows($resultado);
//                    while ($linha = mysqli_fetch_array($resultado)){
//                        mysqli_set_charset($conecta,'utf8'); 
//                        $cd_solicitacao = $linha["cd_solicitacao"];
//                        $nm_solicitante = $linha["nm_solicitante"];
//                        $turma          = $linha["turma"];
//                        $txt_postagem   = $linha["txt_postagem"];
//                        $fotos          = $linha["fotos"];
//                        $dt_solicitacao = $linha["dt_solicitacao"];
//                        echo("
//                        <div class='linha'>
//                            <span id='cd_solicitante'> $cd_solicitacao </span>
//                            <span id='nm_solicitante'>$nm_solicitante </span>
//                            <span id='turma'>$turma </span>
//                            <span id='txt_turma'>$txt_postagem </span>
//                            <span id='fotos'>$fotos </span>
//                            <span id='dt_solicitacao'>$dt_solicitacao </span>
//                        </div>    
//                        <br>");
//                    }
                
                ?>

        </div>
</body>
</html>