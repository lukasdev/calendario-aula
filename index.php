<?php
    include 'calendario.php';
?>
<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <meta charset=UTF-8>
        <title>Calendário de eventos</title>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
    <div class="calendario">
     <?php montaCalendario();?>
    </div>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
    </body>
</html>