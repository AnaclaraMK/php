<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario</h1>
    <div class="SOCORRO" 
 <form>
    
    <h3> formulario</h3>
    <input type="text" placeholder="Login" id="login">
    <input type="password" placeholder="Senha" id="Senha">
    <input type="email" placeholder="email" id="email">
    <input type="tel" placeholder="telefone" id="telefone">
    <input type="submit" onclick="Logar(); return false">

 </form>
</div>
 <script>

    function logar(){

        var login = document.getElementById('login').value;
        var senha = document.getElementById('senha').value;
        var email = document.getElementById('email').value;
        var telefone = document.getElementById('telefone').value;

         if(login=="aaa" && senha=="aaa" && email=='seila@gmail.com'&& telefone=='40028922' ){
            alert('sucesso');
            location.href = "page.php";
        }else{
            alert('Usuario ou senha incorretos');
        }
    }
</body>
</html>