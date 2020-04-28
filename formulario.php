<!DOCTYPE html>
<html>
<head>
        <title>Peniel Equipe Técnica</title>
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="utf-8">
        <meta name="author" content="Felipe Oliveira">
        <meta name="generator" content="VS Code">
        <meta name="keywords" content="Manutenção, Manutenção Predial, Bombas, Limpeza Caixa Dágua, Automação Condominial, 24 horas">
        <meta name="description" content="Peniel Equipe Técnica é uma empresa focada em prover os melhores serviços e prover Soluções para automação Condominial">
        <meta name="application-name" content="Ourives do Saber">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link href="assets/setup/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/setup/style.css" rel="stylesheet">

        <!--favicon-->

        <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="assets/images/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/images/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="assets/images/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <!--Logotipos padrões-->
        <script src="https://kit.fontawesome.com/a91c90836e.js" crossorigin="anonymous"></script>
        
    </head>
    
    <body> 
        <nav class="navbar navbar-default navbar-fixed-top" style="background:rgba(48, 3, 248,0.9);">
            
            <div class="container">
                <div class="navbar-header">
                    
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menumobile" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.html" class="navbar-brand"><img src="assets/images/logoMenu.png" width="100%"></a>
                </div>
                
                <div class="collapse navbar-collapse pull-right" id="menumobile">
                    <ul class="nav navbar-nav" >
                        <li><a href="index.html" style="color:white;">Home</a></li>
                        <li><a href="index.html#who"style="color:white;">Quem Somos</a></li>

                        <li><a href="#"style="color:white;">Clientes<span class="caret"></span></a>
                            <ul>
                                <li><a href="index.html#actions" >Atividades</a></li>
                                <li><a href="index.html#testimonials">Depoimentos</a></li>
                            </ul>
                        </li>

                        <li><a href="index.html#who"style="color:white;">Insumos</a></li>
              
                    </ul>
                
                    <button type="button" class="btn btn-warning navbar-btn"><a href="index.html#contact"style="color:white;">Contato</a></button>
                
                </div>
                
            </div>
        </nav>
        <section>
            <div class="container" align="center">
                
                <h2 align="center">Muito obrigado pelo seu contato! Vamos analisar sua solicitação e retornaremos.</h2>
                <h2 align="center">Clique no nosso logo para retornar para nossa página principal.</h2>
                
                <div align="center">
                    <a href="index.html"><img src="assets/images/logoPeniel.png" width="50%" align="center" alt="" ></a>
                </div>
                
            </div>
        </section>
                
        <?php
        $quebra_linha="\r\n";
        $name=$_POST["nome"];
        $email=$_POST["email"];
        $phone=$_POST["tel"];
        $e_destinatario="";
        $e_sender="penielmanutencaopredial@gmail.com";
        $assunto="Pedido de Contato - Peniel Manutenção Predial";
        $mensagem=$_POST["mensagem"];
        $materiais="";

        $headers = "MIME-Version: 1.1".$quebra_linha;
        $headers .= "Content-type: text/html; charset=utf-8".$quebra_linha;
        $headers .= "From: ".$e_sender;
                
        mail($e_sender, $assunto, "<b>Contato Peniel Manutenção Predial</b>"."<br>"."Nome: ".$name."<br>"."E-Mail: ".$email."<br>"."Telefone: ".$phone."<br>"."Mensagem: ".$mensagem, $headers);
        
        ?>
        
        <script src="assets/setup/js/jquery.js"></script>
        <script src="assets/setup/js/bootstrap.min.js"></script>
        <script src="assets/setup/script.js"></script>
    </body>
</html>