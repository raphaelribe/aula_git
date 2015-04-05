<!DOCTYPE html>
<html lang="en">
   <?php require_once("/tags/cabecalho.php");?>
   <?php require_once("/tags/headers.php");    ?>
<body>

<div class="container">

    <?php require_once("menu.php")?>
    <div class="row">
        <div role="main">
            <!-- conteudo principal -->

            <form class="form-horizontal" action="script/recebeContato.php" method="get">
                <fieldset>
                    <!-- Form Name -->
                    <legend>Fale Conosco</legend>

                    <!-- Text input nome-->
                    <div class="control-group">
                        <label class="control-label">Nome</label>
                        <div class="controls">
                            <input id="nome" name="nome" type="text" placeholder="Insira seu nome" class="input-xlarge" required>
                            <p class="help-block">* Campo Obrigatório</p>
                        </div>
                    </div>

                    <!-- Text input email-->
                    <div class="control-group">
                        <label class="control-label">Nome</label>
                        <div class="controls">
                            <input id="email" name="email" type="text" placeholder="Insira seu email" class="input-xlarge" required>
                            <p class="help-block">* Campo Obrigatório</p>
                        </div>
                    </div>



                    <!-- Selecione o assunto -->
                    <div class="control-group">
                        <label class="control-label">País</label>
                        <div class="controls">
                            <select id="assunto" name="assunto" class="input-xlarge">
                                <option>Elogio</option>
                                <option>Sujestão</option>
                                <option>Crítica</option>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Mensagem</label>
                        <div class="controls">
                            <textarea class="control-group" rows="5" cols="15" name="mensagem">

                            </textarea>
                        </div>
                    </div>
                    <!-- Button -->
                    <div class="control-group">
                        <label class="control-label"></label>
                        <div class="controls">
                            <button id="enviar" name="enviar" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    <footer class="row">

    </footer>
</div>


</body>
</html>