<?php
require 'Connect.php';
$banco = Connect("localhost", "senhas", "root", "v123");
$banco->query("SELECT *FROM categorias");

?>

<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/uikit.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    


    <title>Senhas</title>
    
</head>
<body>
    <section>        
        <div class="header uk-flex uk-flex-center"  uk-grid>
            <div class="">
                <h1><i class="fab fa-keycdn"></i></h1>
            </div>
            <div class=" ">
                <h2>Senhas e Scripts Suporte</h2>
            </div>

        </div>
        <div class="corpo"> 
            <div class="uk-inline">
                <button class="back-to-top fa fa-plus" uk-tooltip="title: Cadastrar" type="button"></button>
                <div  class="cadastro" uk-drop="pos: right-center; mode: click; offset: 10;">
                    <div class="uk-card  uk-card-default">
                        <!-- <div class="uk-card-header hc"> 
                            <div class="header-cadastrar"> Cadastrar</div>

                        </div> -->
                        
                        <div class="uk-card-body">
                        <!-- <div class=" header-cadastrar">Cadastrar</div> -->
                            <form class="form " uk-grid >
                                <div class="uk-width-1-1 " style="padding : 0;">
                                    <input class="uk-input" type="text" placeholder="Link" >
                                </div>
                                <div class="uk-width-1-2@s" style="padding : 0; margin-top:20px;">
                                    <input class="uk-input" type="text" placeholder="Nome">
                                </div>
                                <div class="uk-width-1-2@s" style="margin-top:20px;">
                                    <input class="uk-input" type="text" placeholder="Senha">
                                </div>
                                <div class="uk-width-1-1" style="padding : 0 !important; margin-top:20px;">
                                    <button class="uk-button uk-button-primary uk-align-left@s" type="submit"> Cadastrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- <div class="bt-cadastrar">+</div> -->
            <!-- <div id="back-to-top" class="fa fa-plus uk-inline" type="button">
                <a href="" class="uk-button" type="button"></a>             
                <div uk-drop="pos: left-center">
                    <div class="uk-card uk-card-body uk-card-default">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div>
                </div>
            </div> -->

            <div class="uk-flex uk-flex-center  uk-text-center" uk-grid>                

                <div>
                    <div class="uk-card uk-card-default uk-card-body ">
                    <p style="font-size: 22px !important">Webmail Objeto</p><br />
                        <p class="text-left" style="font-size: 16px !important">                            
                            <b>Acesso:</b> <a href="http://webmail.objetocomunicacao.com.br" target="_blank">Webmail Objeto</a><br />
                            <b>Login:</b>&nbsp  suporte@objetocomunicacao.com.br<br />
                            <b>Senha:</b>&nbsp  <span> #melhor17suporte20#</span><br /><br />                            
                        </p>   
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body ">
                        <p style="font-size: 22px !important">Api Boletos</p><br />
                        <p class="text-left" style="font-size: 16px !important">                            
                            <b>Acesso:</b> <a href="http://www.apiboletos.com.br/" target="_blank">http://www.apiboletos.com.br/</a><br />
	                        <b>Login:</b>&nbsp  suporte@objetocomunicacao.com.br<br />
	                        <b>Senha:</b>&nbsp  objeto110120<br /><br />
                         
                        </p>   
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body ">
                        <p style="font-size: 22px !important">Terra a Vista</p><br />
                        <p class="text-left" style="font-size: 16px !important">                            
                            <b>Acesso:</b> <a href="http://suporte.tvconsultoria.com.br/" target="_blank">http://suporte.tvconsultoria.com.br/</a><br />
	                        <b>Login:</b>&nbsp  objeto<br />
	                        <b>Senha:</b>&nbsp  #Consult0r!a#      | TV@obj102030#!<br /><br />

                         
                        </p>   
                    </div>
                </div>

                                               
                
            </div>
        </div> 
    </section>
</body>
</html>