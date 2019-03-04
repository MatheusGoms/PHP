<?php

if (isset($_POST["cadastrar"])) {
    $login = $_POST["login"];
    $senha =$_POST["senha"];
    $nome =$_POST["nome"];
    $sobrenome =$_POST ["sobrenome"];
    $rg =$_POST ["rg"];
    $cpf =$_POST ["cpf"];
    $telefone =$_POST ["telefone"];
    $celular =$_POST ["celular"];
    $email =$_POST ["email"];
    $cidade =$_POST ["cidade"];
    $tipo_logradouro =$_POST ["tipo_logradouro"];
    $logradouro =$_POST ["logradouro"];
    $cep =$_POST ["cep"];
        
     
    include("conexao.php");
    
    $sqlcadendereco = "insert into endereco (cod_end, tipo_logradouro, logradouro, cep)
            values(null, '".$tipo_logradouro."', '".$logradouro."', '".$cep."')";  
    
    $sqlcadusuario = "insert into usuario (login, senha, nome, sobrenome, rg, cpf, telefone, celular, email, cidade,  cod_end) values
            ('".$nome."','".$sobrenome."','".$login."','".$senha."', '".$rg."', '".$cpf."', '".$telefone."', '".$celular."', '".$email."', '".$cidade."', LAST_INSERT_ID())";
    
    if(mysqli_query($con, $sqlcadendereco)){
      if(mysqli_query($con, $sqlcadusuario)){
        echo "Cadastro efetuado com sucesso!";
    }else{
        echo "Não foi possível efetuar o cadastro";
    }
    }
}
?>
