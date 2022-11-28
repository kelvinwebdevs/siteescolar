<?php 
session_start();
require_once('methods/verification.php');
verificar('pages/login.page.php');

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/style.css" >

    <title>Painel Privado</title>
  </head>
  <body>

  <?php


if(isset($_POST['enviar'])){
    $tipos_permitidos = ['jpg', 'jpeg', 'png', 'pdf', 'mp3', 'gif', 'JPG', 'JPEG', 'PDF', 'PNG', 'MP3', 'TXT', 'txt'];
    $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

    if(in_array($extensao, $tipos_permitidos)){
        //fazer upload
        $pasta = "arquivo/";
        chmod ("arquivo/", 0777);
        chmod ("arquivo/", 0755);
        $temporario = $_FILES['arquivo']['tmp_name'];
        $novoNome = uniqid("imagem").".$extensao";
        if(move_uploaded_file($temporario, $pasta.$novoNome)){
            echo "<br>Upload feito com sucesso<br> <a href='methods/logout2.php'>
            <button class='btn2'>Pagina principal</button></a>";
            
        }else{
          echo '<br/>tipo de arquivo nao suportado<br><br> <a href="methods/logout2.php">
          <button class="btn">Sair</button>
          </a>';
        }
    }else{
      echo '<br/>tipo de arquivo nao suportado<br><br> <a href="methods/logout2.php">
      <button class="btn">Sair</button>
      </a>';
    }

}

?>

    <div class="session">


        <div class="card-body">
            <?php echo " <h3>Seja Bem Vindo(a)</h3>".$_SESSION['name']; ?>

            <div class="plataforma">
              <div class="principal-enviar">
              
              <form action="" method="post" enctype="multipart/form-data">

            <p class="envio">
                <input type="file" name="arquivo" id="arquivo">
            </p>
            <p>  
                <label for="check">Confirmar envio</label>
                <input type="checkbox" name="check" id="check" required>
            </p>
            <p>
                <input type="submit" value="Enviar" class="btn-send" name="enviar">
            </p>

        </form>
      </div>
            </div>
                
            <a href="methods/logout.php">
              <button class="btn">Sair</button>
            </a>

            <a href="methods/logout2.php">
              <button class="btn2">Home</button>
            </a>
            
                
            </a>
        </div>
    </div>


  
     </body>
</html>