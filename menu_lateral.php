<?php
    include '../admin/conecta.php';

?>
<?php
    session_start();
    $email = $_SESSION['email']; 

    $dados= mysqli_query($conecta, "SELECT nm_usuario, sbr_usuario FROM usuario WHERE '$email'= email") or die (mysql_error());
    $nome = mysqli_fetch_assoc($dados);
    if($email == NULL){
        
        header("location: ../login.php");
        echo "<script>alert('Email não encontrado')</script>";
    }else{
        
    }
    
?>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../../css/padroes/menu_lateral.css">
</head>
<div class="menu_superior">    
    <img id="logo_menu" src="http://escola.ielusc.br/BancoArquivos/INST/CONTEUDO/imagens/bom_jesus_ielusc_colorido(1).png" title="Bom Jesus/IELUSC"/>
    
    <div id="perfil">
        <div id="opc_perfil">            
            <span id="nm_usuario"><?php echo $nome['nm_usuario'], ' ', $nome['sbr_usuario']; ?></span>
        </div>
        <img id="foto_perfil" src="../imagens/padroes/icon_user.png">
        <div id="opc_perfil">
            <ul>
                <li><a href="#">Admin</a></li>
                <li><a href="../admin/logout.php">Sair</a></li>
            </ul>
        </div>
    </div>
</div>

<div id="lateral">
        <span id="ico_menu">&equiv;</span>
        <div id="menu">
            <h3 class="link-titulo"><a id="menu_unico" href="index.php">Início</a></h3><br />
            <!-- <h3 class="link-titulo">Cursos</h3> -->
            <h3 class="link-titulo"><a id="menu_unico" href="#">Chamados</a></h3><br />
            <ul class="box">					
                <li><a href="chamados.php">Chamados</a></li>
                <li><a href="avaliados.php">Avaliados</a></li>
                <li><a href="nao_avaliados.php">Não Avaliados</a></li>
            </ul>
            <h3 class="link-titulo">Meus dados</h3>
            <ul class="box">
                <li><a href="minha_agenda.php">Minha Agenda</a></li>
                <li><a href="perfil.php">Perfil</a></li>
                <li><a href="contatos.php">Lista de Contatos</a></li>
                <li><a href="#">Endereço cadastrado</a></li>
            <!-- mais links -->
            </ul>
            
            <h3 class="link-titulo"><a id="menu_unico" href="#">Contato</a></h3>
            <br>            
            <h3 class="link-titulo" style="margin-bottom:50px;"><a id="menu_unico" href="#">Parceiros</a></h3>
            
        </div> <!-- /#menu -->
    </div> <!-- /#lateral -->