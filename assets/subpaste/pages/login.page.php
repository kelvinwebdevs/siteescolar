<!doctype html>
<html lang="pt-br">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="logo.png" >
    <link rel="stylesheet" href="../css/style.css">

    <title>Login</title>
  </head>
  <body>

    <div class="session">

      <div class="card-body">
        <img src="logo.png" alt="logo" class="logo">
        <h4>LOGIN</h4>
        <form action="../methods/login.php" method="post">
            <input class="input-form" type="text" name="userlogin" placeholder="Usuario">
            <input class="input-form" type="password" name="password" placeholder="Senha">

            <button class="btn" type="submit">Entrar</button>
        </form>
      </div>
    </div>

   </body>
</html>