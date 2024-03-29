<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <script type="text/javascript" src="js/jquery-3.5.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.mask.min.js"></script>
    <script src="js/lightbox-plus-jquery.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/v4-shims.css">
    <script defer src="https://use.fontawesome.com/releases/v5.13.0/js/all.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.13.0/js/v4-shims.js"></script>
    <title>Contact_Page</title>
    <script>
    </script>
</head>
<body>
    <!-- NAVEGATION BAR -->
    <button type="button" id="adaw"  class="button" value="adwad" onclick="mostrar('open_div')"><i class="fas fa-angle-down fa-3x"></i></button>
        <div id="open_div" class="hidden">
            <div class="bottonav">
                <div class="centralizar">
                    <div id="haper"><a href="index.html"><i  class="fas fa-tree fa-lg"></i></a><div id="hover"> Inicio</div></div>
                    <div id="haper1"><a href="index1.html"><i class="fas fa-newspaper fa-lg"></i></a><div id="hover1"> Novidades</div></div>
                    <div id="haper2"><a href="index2.php" ><i class="fas fa-phone fa-lg"></i></a><div id="hover2"> Contato</div></div>
                    <div id="haper3"><a href="index3.html" ><i class="fas fa-id-card-alt fa-lg"></i></a><div id="hover3"> Sobre</div></div>
                </div>    
                <div class="search-container">
                    <form action="/index.php">
                        <input id="myInput" type="text" placeholder="Search.." name="search" disabled>
                    </form>
                </div>
            </div>
        </div>
        
    <!-- CONTACT -->
    <div class="content1">
        <div class="raid1">
            <h2>Contate-me</h2>
            <hr><br><br>
            <div class="w3-section">
                <p><i class="fa fa-map-marker"></i> Chicago, BR</p>
                <p><i class="fa fa-phone"></i> Phone: +55 19 151515</p>
                <p><i class="fa fa-envelope"> </i> Email: mail@mail.com</p>
            </div>
            <p>Vamos nos manter em contato. Mande uma mensagem:</p>
        </div>
        <div class="raid">
            <form method="POST" id="form1" name="form1" action="processaemail.php" onsubmit="return valida_form(this)">
                <input required class="input" type="text" placeholder="Nome Completo" name="name">
                <input required class="input" type="email" placeholder="Email" name="email">
                <input required class="input" type="tel" placeholder="Telefone" name="tel">
                <input required class="input" type="text" placeholder="Título da mensagem" name="timsg">
                <textarea required class="input la" style="resize: none" maxlength="500" placeholder="Razão do contato" name="msg"></textarea>
                <button class="input le" type="submit">Enviar</button>
            </form>
        </div>
    </div>
</body>
</html>