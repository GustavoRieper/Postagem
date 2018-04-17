<?php
include ('../admin/conecta.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Painel de Controle - Postagens</title>
        <link rel="stylesheet" type="text/css" href="../css/index.css">
        <link rel="stylesheet" type="text/css" href="../css/padroes/menu_lateral.css">
        <link rel="stylesheet" type="text/css" href="../css/site.css">
        <?php
            include ('../admin/conecta.php');
            
        
        ?>
    </head>
    
    <body>
        <?php include 'link_padroes/menu_lateral.php' ?>
        <div class="buscas">
            <form method="post" action="filtro.php">
                <h2>Filtrar por turma:</h2>
                <select name="turma">
                    <option>Todos</option>
                    <?php
                            mysqli_set_charset($conecta,'utf8'); 
                            $sql = "SELECT ds_turma FROM turmas"; 
                            $resultado = mysqli_query($conecta,$sql);
                            $numero_linhas = mysqli_num_rows($resultado);
                            while ($linha = mysqli_fetch_array($resultado)){
                                $cd_turma = $linha["ds_turma"];
                                echo("<option name='turma'>$cd_turma</option>");
                            }
                        ?>                    
                </select>
                <h2>Filtrar por Nome:</h2>
                <select name="nm_solicitante">
                    <option>Todos</option>                    
                    <?php
                        mysqli_set_charset($conecta,'utf8'); 
                        $sql = "SELECT DISTINCT nm_solicitante FROM solicitacao"; 
                        $resultado = mysqli_query($conecta,$sql);
                        $numero_linhas = mysqli_num_rows($resultado);
                        while ($linha = mysqli_fetch_array($resultado)){
                            $nm_solicitante = $linha["nm_solicitante"];
                            echo("<option name='nm_solicitante'>$nm_solicitante</option>");
                        }
                    ?>
                </select>
                <input type="submit" value="Filtrar">
            </form>
        </div>
        <div class="conteudo">                
                <?php 
                    $turma  = $_POST['turma'];
                    $nm_solicitante = $_POST['nm_solicitante'];

                    if($turma=="Todos" && $nm_solicitante=="Todos"){
                        echo ("<script>window.setTimeout(window.location.href = 'site.php',5000);</script>");
                        
                    }
                    else{
                        
                    }
                    if($turma=="Todos" && $nm_solicitante!="Todos"){
                        mysqli_set_charset($conecta,'utf8'); 
                        $sql = "SELECT * FROM solicitacao WHERE nm_solicitante='$nm_solicitante'"; 
                        $resultado = mysqli_query($conecta,$sql);
                        $numero_linhas = mysqli_num_rows($resultado);
                        while ($linha = mysqli_fetch_array($resultado)){
                            mysqli_set_charset($conecta,'utf8'); 
                            $nm_solicitante = $linha["nm_solicitante"];
                            $turma          = $linha["turma"];
                            $txt_postagem   = $linha["txt_postagem"];
                            $foto0          = $linha["foto0"];
                            $foto1          = $linha["foto1"];
                            $foto2          = $linha["foto2"];
                            $foto3          = $linha["foto3"];
                            $foto4          = $linha["foto4"];
                            $foto5          = $linha["foto5"];
                            $foto6          = $linha["foto6"];
                            $foto7          = $linha["foto7"];
                            $foto8          = $linha["foto8"];
                            $foto9          = $linha["foto9"];
                            $dt_solicitacao = $linha["dt_solicitacao"];            
                            echo("
                            <div class='linha'>
                                <span id='nm_solicitante'>$nm_solicitante </span>
                                <span id='turma'>$turma </span>
                                <span id='txt_turma'>$txt_postagem </span>                            
                                <span id='dt_solicitacao'>$dt_solicitacao </span>
                                <span id='fotos'>
                                ");
                            if($foto0 != null){
                                echo("<a href='../uploads/$foto0'>  <img src='../uploads/$foto0' width=50px;></a>");
                            }
                            if($foto1 != null){
                                echo("<a href='../uploads/$foto1'>  <img src='../uploads/$foto1' width=50px;></a>");
                            }
                            if($foto2 != null){
                                echo("<a href='../uploads/$foto2'>  <img src='../uploads/$foto2' width=50px;></a>");
                            }
                            if($foto3 != null){
                                echo("<a href='../uploads/$foto3'>  <img src='../uploads/$foto3' width=50px;></a>");
                            }
                            if($foto4 != null){
                                echo("<a href='../uploads/$foto4'>  <img src='../uploads/$foto4' width=50px;></a>");
                            }
                            if($foto5 != null){
                                echo("<a href='../uploads/$foto5'>  <img src='../uploads/$foto5' width=50px;></a>");
                            }
                            if($foto6 != null){
                                echo("<a href='../uploads/$foto6'>  <img src='../uploads/$foto6' width=50px;></a>");
                            }
                            if($foto7 != null){
                                echo("<a href='../uploads/$foto7'>  <img src='../uploads/$foto7' width=50px;></a>");
                            }
                            if($foto8 != null){
                                echo("<a href='../uploads/$foto8'>  <img src='../uploads/$foto8' width=50px;></a>");
                            }
                            if($foto9 != null){
                                echo("<a href='../uploads/$foto9'>  <img src='../uploads/$foto9' width=50px;></a>");
                            }                        
                            echo("</span></div><br>");
                        }
                    }else{
                        
                    }  
                if($turma!="Todos" && $nm_solicitante=="Todos"){
                            mysqli_set_charset($conecta,'utf8'); 
                            $sql = "SELECT * FROM solicitacao WHERE turma='$turma'"; 
                            $resultado = mysqli_query($conecta,$sql);
                            $numero_linhas = mysqli_num_rows($resultado);

                            while ($linha = mysqli_fetch_array($resultado)){
                                mysqli_set_charset($conecta,'utf8'); 
                                $nm_solicitante = $linha["nm_solicitante"];
                                $turma          = $linha["turma"];
                                $txt_postagem   = $linha["txt_postagem"];
                                $foto0          = $linha["foto0"];
                                $foto1          = $linha["foto1"];
                                $foto2          = $linha["foto2"];
                                $foto3          = $linha["foto3"];
                                $foto4          = $linha["foto4"];
                                $foto5          = $linha["foto5"];
                                $foto6          = $linha["foto6"];
                                $foto7          = $linha["foto7"];
                                $foto8          = $linha["foto8"];
                                $foto9          = $linha["foto9"];
                                $dt_solicitacao = $linha["dt_solicitacao"];            
                                echo("
                                <div class='linha'>
                                    <span id='nm_solicitante'>$nm_solicitante </span>
                                    <span id='turma'>$turma </span>
                                    <span id='txt_turma'>$txt_postagem </span>                            
                                    <span id='dt_solicitacao'>$dt_solicitacao </span>
                                    <span id='fotos'>
                                    ");
                                if($foto0 != null){
                                    echo("<a href='../uploads/$foto0'>  <img src='../uploads/$foto0' width=50px;></a>");
                                }
                                if($foto1 != null){
                                    echo("<a href='../uploads/$foto1'>  <img src='../uploads/$foto1' width=50px;></a>");
                                }
                                if($foto2 != null){
                                    echo("<a href='../uploads/$foto2'>  <img src='../uploads/$foto2' width=50px;></a>");
                                }
                                if($foto3 != null){
                                    echo("<a href='../uploads/$foto3'>  <img src='../uploads/$foto3' width=50px;></a>");
                                }
                                if($foto4 != null){
                                    echo("<a href='../uploads/$foto4'>  <img src='../uploads/$foto4' width=50px;></a>");
                                }
                                if($foto5 != null){
                                    echo("<a href='../uploads/$foto5'>  <img src='../uploads/$foto5' width=50px;></a>");
                                }
                                if($foto6 != null){
                                    echo("<a href='../uploads/$foto6'>  <img src='../uploads/$foto6' width=50px;></a>");
                                }
                                if($foto7 != null){
                                    echo("<a href='../uploads/$foto7'>  <img src='../uploads/$foto7' width=50px;></a>");
                                }
                                if($foto8 != null){
                                    echo("<a href='../uploads/$foto8'>  <img src='../uploads/$foto8' width=50px;></a>");
                                }
                                if($foto9 != null){
                                    echo("<a href='../uploads/$foto9'>  <img src='../uploads/$foto9' width=50px;></a>");
                                }                        
                                echo("</span></div><br>");
                            }
                        }else{}
                    if($turma!="Todos" && $nm_solicitante!="Todos"){
                        mysqli_set_charset($conecta,'utf8'); 
                            $sql = "SELECT * FROM solicitacao WHERE turma='$turma' and nm_solicitante='$nm_solicitante'"; 
                            $resultado = mysqli_query($conecta,$sql);
                            $numero_linhas = mysqli_num_rows($resultado);
                            while ($linha = mysqli_fetch_array($resultado)){
                                mysqli_set_charset($conecta,'utf8'); 
                                $nm_solicitante = $linha["nm_solicitante"];
                                $turma          = $linha["turma"];
                                $txt_postagem   = $linha["txt_postagem"];
                                $foto0          = $linha["foto0"];
                                $foto1          = $linha["foto1"];
                                $foto2          = $linha["foto2"];
                                $foto3          = $linha["foto3"];
                                $foto4          = $linha["foto4"];
                                $foto5          = $linha["foto5"];
                                $foto6          = $linha["foto6"];
                                $foto7          = $linha["foto7"];
                                $foto8          = $linha["foto8"];
                                $foto9          = $linha["foto9"];
                                $dt_solicitacao = $linha["dt_solicitacao"];            
                                echo("
                                <div class='linha'>
                                    <span id='nm_solicitante'>$nm_solicitante </span>
                                    <span id='turma'>$turma </span>
                                    <span id='txt_turma'>$txt_postagem </span>                            
                                    <span id='dt_solicitacao'>$dt_solicitacao </span>
                                    <span id='fotos'>
                                    ");
                                if($foto0 != null){
                                    echo("<a href='../uploads/$foto0'>  <img src='../uploads/$foto0' width=50px;></a>");
                                }
                                if($foto1 != null){
                                    echo("<a href='../uploads/$foto1'>  <img src='../uploads/$foto1' width=50px;></a>");
                                }
                                if($foto2 != null){
                                    echo("<a href='../uploads/$foto2'>  <img src='../uploads/$foto2' width=50px;></a>");
                                }
                                if($foto3 != null){
                                    echo("<a href='../uploads/$foto3'>  <img src='../uploads/$foto3' width=50px;></a>");
                                }
                                if($foto4 != null){
                                    echo("<a href='../uploads/$foto4'>  <img src='../uploads/$foto4' width=50px;></a>");
                                }
                                if($foto5 != null){
                                    echo("<a href='../uploads/$foto5'>  <img src='../uploads/$foto5' width=50px;></a>");
                                }
                                if($foto6 != null){
                                    echo("<a href='../uploads/$foto6'>  <img src='../uploads/$foto6' width=50px;></a>");
                                }
                                if($foto7 != null){
                                    echo("<a href='../uploads/$foto7'>  <img src='../uploads/$foto7' width=50px;></a>");
                                }
                                if($foto8 != null){
                                    echo("<a href='../uploads/$foto8'>  <img src='../uploads/$foto8' width=50px;></a>");
                                }
                                if($foto9 != null){
                                    echo("<a href='../uploads/$foto9'>  <img src='../uploads/$foto9' width=50px;></a>");
                                }                        
                                echo("</span></div><br>");
                        }
                    }
                
                ?>

        </div>
    </body>
</html>
        