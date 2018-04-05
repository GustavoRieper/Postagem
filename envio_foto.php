<?php
include ('admin/conecta.php');
?>
<!DOCTYPE html>
<html>
    <head>
    
    </head>
    
    <body bgcolor="black">
        <?php       
        mysqli_set_charset($conecta,'utf8'); 
        $nm_solicitante = $_POST['nm_solicitante'];
        $turma          = $_POST['turma'];
        $txt_postagem   = $_POST['txt_postagem'];
        $dt_solicitacao = $_POST['dt_solicitacao'];
        $cd_solicitacao = 'NULL';
        $nulo = 'NULL';
        $i = "0";        
        $nm_foto = rtrim($nm_solicitante);
        
         $sql = mysqli_query($conecta, "INSERT INTO solicitacao(cd_solicitacao, nm_solicitante, turma, txt_postagem, dt_solicitacao) VALUE ('$cd_solicitacao' , '$nm_solicitante', '$turma', '$txt_postagem', '$dt_solicitacao')");
        
        
        
        /* ----------------------------Foto0---------------------------------*/
        if(isset($_FILES['foto0'])){

            $extensao = strtolower( substr($_FILES['foto0']['name'], -4));
            if($extensao == ".jpg"){


            }else{
                $extensao = ".jpg";

            }
            $foto0 = $nm_foto . date("Y.m.d-H.i.s") ."-". $i . $extensao;
            $diretorio ="uploads/";
            echo ("$foto0<br>");
            move_uploaded_file($_FILES['foto0']['tmp_name'], $diretorio.$foto0);
            
            $sql = "SELECT * FROM solicitacao WHERE nm_solicitante='$nm_solicitante' AND dt_solicitacao='$dt_solicitacao' and txt_postagem='$txt_postagem'";
            $resultado = mysqli_query($conecta,$sql);
            $numero_linhas = mysqli_num_rows($resultado);
            while ($linha = mysqli_fetch_array($resultado)){
                $cd_solicitacao = $linha["cd_solicitacao"];
            }
            $sql = mysqli_query($conecta, "UPDATE solicitacao SET foto0='$foto0' WHERE nm_solicitante='$nm_solicitante' AND dt_solicitacao='$dt_solicitacao' and txt_postagem='$txt_postagem'");
            $i = $i + "1";
        }
        /* -------------------------Foto1------------------------------------*/
        if(isset($_FILES['foto1'])){
            $verifica1 = strtolower($_FILES['foto1']['name']);
            if($verifica1 != null){
                $extensao = strtolower( substr($_FILES['foto1']['name'], -4));
                if($extensao == ".jpg"){


                }else{
                    $extensao = ".jpg";

                }

                $foto1 = $nm_foto . date("Y.m.d-H.i.s") ."-". $i . $extensao;
                $diretorio ="uploads/";
                echo ("$foto1<br>");
                move_uploaded_file($_FILES['foto1']['tmp_name'], $diretorio.$foto1);

                $sql = "SELECT * FROM solicitacao WHERE nm_solicitante='$nm_solicitante' AND dt_solicitacao='$dt_solicitacao' and txt_postagem='$txt_postagem'";
                $resultado = mysqli_query($conecta,$sql);
                $numero_linhas = mysqli_num_rows($resultado);
                while ($linha = mysqli_fetch_array($resultado)){
                    $cd_solicitacao = $linha["cd_solicitacao"];
                }
                $sql = mysqli_query($conecta, "UPDATE solicitacao SET foto1='$foto1' WHERE nm_solicitante='$nm_solicitante' AND dt_solicitacao='$dt_solicitacao' and txt_postagem='$txt_postagem'");
                $i = $i + "1";
            }else{
                
            }
                      
        }
        
        /* -------------------------Foto2------------------------------------*/
        if(isset($_FILES['foto2'])){
            $verifica2 = strtolower($_FILES['foto2']['name']);
            if($verifica2 != null){
                $extensao = strtolower( substr($_FILES['foto2']['name'], -4));
                if($extensao == ".jpg"){


                }else{
                    $extensao = ".jpg";

                }

                $foto2 = $nm_foto . date("Y.m.d-H.i.s") ."-". $i . $extensao;
                $diretorio ="uploads/";
                echo ("$foto2<br>");
                move_uploaded_file($_FILES['foto2']['tmp_name'], $diretorio.$foto2);

                $sql = "SELECT * FROM solicitacao WHERE nm_solicitante='$nm_solicitante' AND dt_solicitacao='$dt_solicitacao' and txt_postagem='$txt_postagem'";
                $resultado = mysqli_query($conecta,$sql);
                $numero_linhas = mysqli_num_rows($resultado);
                while ($linha = mysqli_fetch_array($resultado)){
                    $cd_solicitacao = $linha["cd_solicitacao"];
                }
                $sql = mysqli_query($conecta, "UPDATE solicitacao SET foto2='$foto2' WHERE nm_solicitante='$nm_solicitante' AND dt_solicitacao='$dt_solicitacao' and txt_postagem='$txt_postagem'");
                $i = $i + "1";
            }else{
                
            }
        }
        
        
        /* ----------------------------Foto3---------------------------------*/
        if(isset($_FILES['foto3'])){
            $verifica3 = strtolower($_FILES['foto3']['name']);
            if($verifica3 != null){
            
                $extensao = strtolower( substr($_FILES['foto3']['name'], -4));
                if($extensao == ".jpg"){


                }else{
                    $extensao = ".jpg";

                }

                $foto3 = $nm_foto . date("Y.m.d-H.i.s") ."-". $i . $extensao;
                $diretorio ="uploads/";
                echo ("$foto3<br>");
                move_uploaded_file($_FILES['foto3']['tmp_name'], $diretorio.$foto3);

                $sql = "SELECT cd_solicitacao FROM solicitacao WHERE nm_solicitante='$nm_solicitante' AND dt_solicitacao='$dt_solicitacao' and txt_postagem='$txt_postagem'";
                $resultado = mysqli_query($conecta,$sql);
                $numero_linhas = mysqli_num_rows($resultado);
                while ($linha = mysqli_fetch_array($resultado)){
                    $cd_solicitacao = $linha["cd_solicitacao"];
                }
                $sql = mysqli_query($conecta, "UPDATE solicitacao SET foto3='$foto3' WHERE nm_solicitante='$nm_solicitante' AND dt_solicitacao='$dt_solicitacao' and txt_postagem='$txt_postagem'");
                $i = $i + '1';
            }else{
                
            }
        }
        
        /* -------------------------Foto4------------------------------------*/
        if(isset($_FILES['foto4'])){
            $verifica4 = strtolower($_FILES['foto4']['name']);
            if($verifica4 != null){
            
                $extensao = strtolower( substr($_FILES['foto4']['name'], -4));
                if($extensao == ".jpg"){


                }else{
                    $extensao = ".jpg";

                }            
                $foto4 = $nm_foto . date("Y.m.d-H.i.s") ."-". $i . $extensao;
                $diretorio ="uploads/";
                echo ("$foto4<br>");
                move_uploaded_file($_FILES['foto4']['tmp_name'], $diretorio.$foto4);

                $sql = "SELECT cd_solicitacao FROM solicitacao WHERE nm_solicitante='$nm_solicitante' AND dt_solicitacao='$dt_solicitacao' and txt_postagem='$txt_postagem'";
                $resultado = mysqli_query($conecta,$sql);
                $numero_linhas = mysqli_num_rows($resultado);
                while ($linha = mysqli_fetch_array($resultado)){
                    $cd_solicitacao = $linha["cd_solicitacao"];
                }
                $sql = mysqli_query($conecta, "UPDATE solicitacao SET foto4='$foto4' WHERE nm_solicitante='$nm_solicitante' AND dt_solicitacao='$dt_solicitacao' and txt_postagem='$txt_postagem'");
                $i = $i + '1';
            }else{
                
            }
        }
        
        /* -------------------------Foto5------------------------------------*/
        if(isset($_FILES['foto5'])){
            $verifica5 = strtolower($_FILES['foto5']['name']);
            if($verifica5 != null){
            
                $extensao = strtolower( substr($_FILES['foto5']['name'], -4));
                if($extensao == ".jpg"){


                }else{
                    $extensao = ".jpg";

                }            
                $foto5 = $nm_foto . date("Y.m.d-H.i.s") ."-". $i . $extensao;
                $diretorio ="uploads/";
                echo ("$foto5<br>");
                move_uploaded_file($_FILES['foto5']['tmp_name'], $diretorio.$foto5);

                $sql = "SELECT cd_solicitacao FROM solicitacao WHERE nm_solicitante='$nm_solicitante' AND dt_solicitacao='$dt_solicitacao' and txt_postagem='$txt_postagem'";
                $resultado = mysqli_query($conecta,$sql);
                $numero_linhas = mysqli_num_rows($resultado);
                while ($linha = mysqli_fetch_array($resultado)){
                    $cd_solicitacao = $linha["cd_solicitacao"];
                }
                $sql = mysqli_query($conecta, "UPDATE solicitacao SET foto5='$foto5' WHERE nm_solicitante='$nm_solicitante' AND dt_solicitacao='$dt_solicitacao' and txt_postagem='$txt_postagem'");
                $i = $i + '1';
            }else{
                
            }
        }
        
        /*-------------------------Foto6------------------------------------*/
        if(isset($_FILES['foto6'])){
            $verifica6 = strtolower($_FILES['foto6']['name']);
            if($verifica6 != null){
            
                $extensao = strtolower( substr($_FILES['foto6']['name'], -4));
                if($extensao == ".jpg"){


                }else{
                    $extensao = ".jpg";

                }            
                $foto6 = $nm_foto . date("Y.m.d-H.i.s") ."-". $i . $extensao;
                $diretorio ="uploads/";
                echo ("$foto6<br>");
                move_uploaded_file($_FILES['foto6']['tmp_name'], $diretorio.$foto6);

                $sql = "SELECT cd_solicitacao FROM solicitacao WHERE nm_solicitante='$nm_solicitante' AND dt_solicitacao='$dt_solicitacao' and txt_postagem='$txt_postagem'";
                $resultado = mysqli_query($conecta,$sql);
                $numero_linhas = mysqli_num_rows($resultado);
                while ($linha = mysqli_fetch_array($resultado)){
                    $cd_solicitacao = $linha["cd_solicitacao"];
                }
                $sql = mysqli_query($conecta, "UPDATE solicitacao SET foto6='$foto6' WHERE nm_solicitante='$nm_solicitante' AND dt_solicitacao='$dt_solicitacao' and txt_postagem='$txt_postagem'");
                $i = $i + '1';
            }else{
                
            }
        }
        
        /*-------------------------Foto7------------------------------------*/
        if(isset($_FILES['foto7'])){
            $verifica7 = strtolower($_FILES['foto7']['name']);
            if($verifica7 != null){
            
                $extensao = strtolower( substr($_FILES['foto7']['name'], -4));
                if($extensao == ".jpg"){


                }else{
                    $extensao = ".jpg";

                }            
                $foto7 = $nm_foto . date("Y.m.d-H.i.s") ."-". $i . $extensao;
                $diretorio ="uploads/";
                echo ("$foto7<br>");
                move_uploaded_file($_FILES['foto7']['tmp_name'], $diretorio.$foto7);

                $sql = "SELECT cd_solicitacao FROM solicitacao WHERE nm_solicitante='$nm_solicitante' AND dt_solicitacao='$dt_solicitacao' and txt_postagem='$txt_postagem'";
                $resultado = mysqli_query($conecta,$sql);
                $numero_linhas = mysqli_num_rows($resultado);
                while ($linha = mysqli_fetch_array($resultado)){
                    $cd_solicitacao = $linha["cd_solicitacao"];
                }
                $sql = mysqli_query($conecta, "UPDATE solicitacao SET foto7='$foto7' WHERE nm_solicitante='$nm_solicitante' AND dt_solicitacao='$dt_solicitacao' and txt_postagem='$txt_postagem'");
                $i = $i + '1';
            }else{
                
            }
        }
       
        /*-------------------------Foto8------------------------------------*/
        if(isset($_FILES['foto8'])){
            $verifica8 = strtolower($_FILES['foto8']['name']);
            if($verifica8 != null){
            
                $extensao = strtolower( substr($_FILES['foto8']['name'], -4));
                if($extensao == ".jpg"){


                }else{
                    $extensao = ".jpg";

                }            
                $foto8 = $nm_foto . date("Y.m.d-H.i.s") ."-". $i . $extensao;
                $diretorio ="uploads/";
                echo ("$foto8<br>");
                move_uploaded_file($_FILES['foto8']['tmp_name'], $diretorio.$foto8);

                $sql = "SELECT cd_solicitacao FROM solicitacao WHERE nm_solicitante='$nm_solicitante' AND dt_solicitacao='$dt_solicitacao' and txt_postagem='$txt_postagem'";
                $resultado = mysqli_query($conecta,$sql);
                $numero_linhas = mysqli_num_rows($resultado);
                while ($linha = mysqli_fetch_array($resultado)){
                    $cd_solicitacao = $linha["cd_solicitacao"];
                }
                $sql = mysqli_query($conecta, "UPDATE solicitacao SET foto8='$foto8' WHERE nm_solicitante='$nm_solicitante' AND dt_solicitacao='$dt_solicitacao' and txt_postagem='$txt_postagem'");
                $i = $i + '1';
            }else{
                
            }
        }
        
        /*-------------------------Foto9------------------------------------*/
        if(isset($_FILES['foto9'])){
            $verifica9 = strtolower($_FILES['foto9']['name']);
            if($verifica9 != null){
            
                $extensao = strtolower( substr($_FILES['foto9']['name'], -4));
                if($extensao == ".jpg"){


                }else{
                    $extensao = ".jpg";

                }            
                $foto9 = $nm_foto . date("Y.m.d-H.i.s") ."-". $i . $extensao;
                $diretorio ="uploads/";
                echo ("$foto9<br>");
                move_uploaded_file($_FILES['foto9']['tmp_name'], $diretorio.$foto9);

                $sql = "SELECT cd_solicitacao FROM solicitacao WHERE nm_solicitante='$nm_solicitante' AND dt_solicitacao='$dt_solicitacao' and txt_postagem='$txt_postagem'";
                $resultado = mysqli_query($conecta,$sql);
                $numero_linhas = mysqli_num_rows($resultado);
                while ($linha = mysqli_fetch_array($resultado)){
                    $cd_solicitacao = $linha["cd_solicitacao"];
                }
                $sql = mysqli_query($conecta, "UPDATE solicitacao SET foto9='$foto9' WHERE nm_solicitante='$nm_solicitante' AND dt_solicitacao='$dt_solicitacao' and txt_postagem='$txt_postagem'");
                $i = $i + '1';
            }else{
                
            }
        }
        echo("<script>alert('Fotos enviadas com sucesso!');</script>");
      
        
        
//        header('Location: index.php');
         echo ("<script>window.setTimeout(window.location.href = 'index.php',5000);</script>");

        
        
        
        ?>
    </body>
</html>
        