<?php
  
    include("conexao.php");
   

    $nome=$_POST['Nome'];
    $sobrenome=$_POST['Sobrenome'];
    $email=$_POST['Email'];
    $senha=md5($_POST['Senha']);

    $sql="INSERT INTO cadastro(nome, sobrenome, email, senha) VALUES ('$nome', '$sobrenome', '$email', '$senha')";

    if(mysqli_query($conexao, $sql)){
        echo "Usuario cadastrado com sucesso";
    }
        
    else{
        echo "Erro" . mysqli_connect_error($conexao);
    }
        


    mysqli_close($conexao);
?>







