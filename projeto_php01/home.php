<!DOCTYPE html>
<html lang="en">
<!-- Inclusão da tag head com todos os códigos do js, bootstrap e css-->
<?php require_once("/tags/head.php");?>
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
        <!-- Footer com função de data -->
        <?php include_once("footer.php");?>
    </div>
</body>
</html>