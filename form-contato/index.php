<?php

    include ('config.php');
    Mysql:: instagram(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulário</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="form.css" rel = "stylesheet">
    
</head>
<body>
    <div>
        <img src="https://logosmarcas.net/wp-content/uploads/2020/12/Batman-Logo.png">
        <h3>CADASTRO DE USUÁRIO</h3>
    </div>
   
    <div class = "form_cd">
        
        <form method="POST">
            
            
            <div><input type="text" name = "nome" placeholder = "Informe seu nome"></div>
            <div><input type="email" name = "email" placeholder = "Informe seu email"></div>
            <div><input type="password" name = "password" placeholder = "informe sua senha"></div>
            <div><input type="submit" name = "acao" value = "cadastrar"></div>
            <div><input type="hidden" nome = "form" value="f_forme"></div>
            
        </form>
    </div><!--form cd -->


</body>
</html>