<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <title>Login - Fotos Bom Jesus IELUSC</title>
    </head>

    <body>
        <div class="box_login">
            <form method="post" action="admin/autenticacao.php">
                <img src="http://escola.ielusc.br/BancoArquivos/INST/CONTEUDO/imagens/bom_jesus_ielusc_colorido(1).png">
                <h2>Digite seu email</h2>
                <input type="email" name="email" id="email" required placeholder="Digite seu Email">
                
                <h2>Digite sua senha</h2>
                <input type="password" name="senha" required placeholder="Digite sua Senha">
                <br>
                <input type="submit" name="enviar" id="enviar" value="Logar">
            </form>
        </div>
    </body>
</html>