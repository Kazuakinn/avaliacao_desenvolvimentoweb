<?php

if (isset($_POST['submit'])) {
    // print_r($_POST['usuario']);
    // printf('<br>');
    // print_r($_POST['nome']);
    // printf('<br>');
    // print_r($_POST['email']);
    // printf('<br>');
    // print_r($_POST['sexo']);
    // printf('<br>');
    // print_r($_POST['senha']);

    include_once('config.php');

    $usuario = $_POST['usuario'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(usuario,nome,email,sexo,senha)
    VALUES ('$usuario','$nome','$email','$sexo','$senha')");
}




?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylecadastro.css">
    <title>Cadastro</title>
</head>
<body>
    <!-------logo ------->
       <nav>
     <center> <img class="kwland" src="img/logo-kawaiiland.png" alt=""> </center>
   
     <!---menu-->
     <center>
      <ul id="menu">
        <li> <a href="home.html">Home</a></li> 
        <li> <a href="Produtos.html">Produtos</a></li>
        <li> <a href="cadastro.php">Cadastro</a></li>
    </ul>
</center>
   </nav>
   <!-----cadastro -->
   <center>

    <main>
        <center>
    <div class="form_cd">  
        <form method="POST" action="cadastro.php">
    <h2> Cadastro</h2>
    <input type="text" name="usuario" id="form" placeholder="Usuario" required> <br> <br>
    <input type="text" name="nome" id="form" placeholder="Nome completo" required> <br> <br>
    <input type="email" name="email" id="form" placeholder="E-mail" required> <br> <br>
    <select name="sexo">
        <option  name="masculino" value="M">Masculino</option>
        <option  name="feminino" value="F">Feminino </option>
        <option  name="outros" value="Outros">N/D</option>
    </select> <br> <br>
    <input type="password" name="senha" id="form" placeholder="Senha" required> <br> <br>
    <input type="password" name="confsenha" id="form" placeholder=" Confirme senha" required>
    <label for="post"> <br><br> Li e estou de acordo com <a href="https://www.meme-arsenal.com/memes/359f35e81501b5809bb62bab7f264309.jpg" target="_blank"> Termo de uso </a> <input type="checkbox" required> </label>
    <br> <br>
    <input type="submit" name="submit" id="btn" value="cadastrar">
</form>
</div>
   </center>
</main>
   <!---rodapé-->
  <center> <footer> kawailand &copy; 2023 - Todos os direitos reservados </footer> </center>
</body>
</html>