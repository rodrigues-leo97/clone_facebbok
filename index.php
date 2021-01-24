<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
   
    <title>Facebook</title>
        <!--aplicar depois as meta tags-->
</head>
<body>
        <header>
            <div class="center">
                <div class="logo">
                    <h2>facebook</h2>

                         </div><!--logo-->


                    <form method="POST" class="form-login">

                        <div class="form-element">
                            <p>E-mail ou telefone</p>
                            <input type="email">

                        </div><!--form-element-->

                            <div class="form-element">
                                <p>Senha</p>
                                    <input type="password">
                            </div><!--form-element-->

                            <div class="form-element">
                                    <input type="submit" name="acao" value="Enviar">
                            </div><!--form-element-->
                    </form><!--form-login-->
                    
                <div class="clear"></div><!--clear, e serve para limpar a flutuação e o site seguir com o fluxo normal-->
            </div><!--center-->

        </header>

        <section class="main">
            <div class="center">
                <div class="img-pessoas">
                    <img src="img/like-facebook.png" alt="logotipo facebook">

                </div><!--img-pessoas-->

                    <div class="abrir-conta">
                        <h2>Abra sua conta</h2>
                        <h3>É gratuito e sempre será!</h3>

                            <form class="criar-conta">
                                <div class="w50">
                                    <input placeholder="Nome" type="text">
                                </div><!--w50-->

                                <div class="w50">
                                    <input placeholder="Sobrenome" type="text">
                                </div><!--w50-->

                                <div class="w100">
                                    <input placeholder="E-mail" type="email">
                                </div><!--w100-->

                                <div class="w100">
                                    <input placeholder="Senha" type="password">
                                </div><!--w100-->

                                <div class="w100">
                                    <h2>Data de nascimento: </h2>
                                        <select name="nascimento-dia" class="nascimento">
                                            <?php
                                                for($i = 1; $i <= 31; $i++) { 

                                            ?>

                                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                            <?php } ?>

                                        </select>

                                        <select name="nascimento-mes" class="nascimento">
                                            <option value="1">Jan</option>
                                            <option value="2">Fev</option>
                                            <option value="3">Mar</option>
                                            <option value="4">Abr</option>
                                            <option value="5">Maio</option>
                                            <option value="6">Jun</option>
                                            <option value="7">Jul</option>
                                            <option value="8">Agst</option>
                                            <option value="9">Set</option>
                                            <option value="10">Out</option>
                                            <option value="11">Nov</option>
                                            <option value="12">Dez</option>

                                        </select>

                                        <select name="nascimento-ano" class="nascimento">
                                        <?php
                                                for($i = 1960; $i <= 2020; $i++) { 
                                            ?>

                                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                            <?php } ?>

                                        </select>
                                        <div class="clear"></div><!--clear-->

                                </div><!--w100-->

                                <div class="w100">
                                    <div class="input-radio">
                                        <input type="radio" name="sexo" value="masculino">
                                        <h2>Masculino</h2>
                                    </div><!--radio-->

                                    

                                    <div class="input-radio">
                                        <input type="radio" name="sexo" value="feminino">
                                        <h2>Feminino</h2>
                                    </div><!--radio-->

                                    <div class="clear"></div><!--clear-->
                                
                                </div><!--w100-->

                                <div class="w100">
                                    <input type="submit" name="acao" value="Cadastrar!">

                                </div><!--w100-->


                        </form><!--criar-conta-->

                    </div><!--abrir-conta-->

                    <div class="clear"></div><!--clear--><!--sempre após usar float se usa o clear para limpar a flutuação no final-->
                        <!--por isso é mais vantajoso porém mais complicado usar o flexbox-->

            </div><!--center-->

        </section><!--main-->

        <section class="linguas">
            <div class="center">
            
                <a class="selected-lingua" href="#">Português(BR)</a>
                <a href="#">English(US)</a>
                <a href="#">Español</a>
                <a href="#">Français(France)</a>
                <a href="#">Italiano</a>

                </div><!--center-->


                <div style="border: 0; padding-top:10px;" class="center">
            
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>
            <a href="#">Lorem Ipsum</a>

            </div><!--center-->
        
        </section><!--linguas-->

    
</body>
</html>