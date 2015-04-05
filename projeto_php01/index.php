<!DOCTYPE html>
<html lang="en">
<?php require_once("/tags/cabecalho.php");?>
<body>
<?php require_once("/tags/headers.php");    ?>
<div class="container">

    <?php require_once("menu.php");?>

    <div class="row">

        <div>
            <?php require_once($_GET["arquivo"]); ?>
        </div>

        <div role="main">
            <!-- conteudo principal -->

            <div class="carousel slide" id="carousel-643458">
                <ol class="carousel-indicators">
                    <li class="active" data-slide-to="0" data-target="#carousel-643458">
                    </li>
                    <li data-slide-to="1" data-target="#carousel-643458">
                    </li>
                    <li data-slide-to="2" data-target="#carousel-643458">
                    </li>
                </ol>

            <?php require_once("/script/carrosel.php");?>
                <img src="img/bancos.png" border="0" alt="Agiliza Emprétimo Consignado">
            </div>


    </div>
    <footer class="row">
 todos os direitos reservados<?php include_once("/script/date.php");?>
    </footer>
</div>


</body>
</html>