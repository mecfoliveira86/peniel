<html>
<head>
        <title>Cálculo de Nível Sigma</title>
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="utf-8">
        <meta name="author" content="Felipe Oliveira">
        <meta name="generator" content="Brackets">
        <meta name="keywords" content="Lean, Lean Manufacturing, Lean Office, Kaizen, Kaizem, PDCA, A3, Sistema Toyota de Produção, TPS, Toyota Production System">
        <meta name="description" content="Página Piece Consultoria que visa auxiliar empresas a realizarem aumento de lucratividade de suas unidades por meio da implementação do Lean e de suas ferramentas">
        <meta name="application-name" content="Ourives do Saber">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link href="assets/setup/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/setup/style.css" rel="stylesheet">

        <!--favicon-->

        <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        
    </head>
    
    <body>
    <nav class="navbar navbar-default navbar-fixed-top" style="background:rgba(255,201,14,0.92);">
            
            <div class="container">
                <div class="navbar-header">
                    
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menumobile" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.html" class="navbar-brand"><img src="assets/images/logoPieceMenu.png" width="100%"></a>
                    <a href="index.html" class="navbar-brand"><img src="assets/images/brazil_flag.png" width="100%"></a>
                    <a href="#" class="navbar-brand"><img src="assets/images/england_flag.png" width="100%"></a>
                </div>
                
                <div class="collapse navbar-collapse pull-right" id="menumobile">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="index.html#who">Quem Somos</a></li>
                        
                        <li><a href="#">Atuação<span class="caret"></span></a>
                            <ul>
                                <li><a href="nossospassos.html">Nossos Passos</a></li>
                                <li><a href="5S-TPM.html">5S-TPM</a></li>
                                <li><a href="Sistemas.html">Sistemas de Gestão</a></li>
                                <li><a href="treinamento.html">Gestão Empresarial</a></li>
                                <li><a href="Kaizen-A3.html">Kaizen-A3</a></li>
                                <li><a href="Shopfloor.html">Shop Floor</a></li>
                                <li><a href="lean.html">Lean</a></li>
                            </ul>
                        </li>

                        <li><a href="#">Clientes<span class="caret"></span></a>
                            <ul>
                                <li><a href="index.html#actions">Atividades</a></li>
                                <li><a href="index.html#testimonials">Depoimentos</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="#">Publicações<span class="caret"></span></a>
                            <ul>
                                <li><a href="artigos.html">Artigos</a></li>
                                <li><a href="podcasts.html">Podcasts</a></li>
                                <li><a href="cientificos.html">Científicos</a></li>
                                <li><a href="infograficos.html">Infográficos</a></li>
                                <li><a href="assets/pdf/Folder.pdf" target="_blank">Folder</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="#">Apps Online<span class="caret"></span></a>
                            <ul>
                                <li><a href="oeeSimples.php">OEE</a></li>
                                <li><a href="manutencao.php">Manutenção</a></li>
                                <li><a href="niosh.php">NIOSH</a></li>
                                <li><a href="ppm.php">PPM</a></li>
                                <li><a href="sigma.php">Sigma</a></li>
                            </ul>
                        </li>
                                      
                    </ul>
                
                    <button type="button" class="btn btn-warning navbar-btn"><a href="index.html#contact">Contato</a></button>
                
                </div>
                
            </div>
        </nav>
    
    <section>

    <div class="col-md-12" align="center"><h1>Cálculo do Nível Sigma</h1></div>
    <div class="col-md-6">
        <form id="formEnvia" method="get" action="sigma.php" class="form-horizontal">
            <div class="col-md-12">
                <label class="col-md-12 control-label" for="principal">
                    <h3 align="center">Preencha os campos abaixo para calcular o % de Refugo, PPM e Nível Sigma:</h3>
                </label>
                <div class="form-group">
                    <label class="col-md-6 control-label" for="horas"><h3>Produção:</h3></label>
                        <div class="col-md-6">    
                            <input  class="form-control" type="number" name="produzidas" placeholder="unidades"/>
                        </div>
                </div>    
                <div class="form-group">
                    <label class="col-md-6 control-label" for="horas"><h3>Refugo:</h3></label>
                        <div class="col-md-6">    
                            <input  class="form-control" type="number" name="falhas" placeholder="unidades"/>
                        </div>
                </div>
                <!-- Botao-->
                <div class="col-md-12">
                        <div class="col-md-6 col-md-offset-3">
                            <h3><input  class="btn btn-primary btn-block" align="center" type="submit" value="Calcular Nível Sigma"></h3>
                        </div>                        
                    </div>
            </div>
        </form>
        <!--Lógica PHP-->
        <?php
            $produzidas = isset($_GET["produzidas"])?$_GET["produzidas"]:0;
            $falhas = isset($_GET["falhas"])?$_GET["falhas"]:0;
            //calculos
            if ($produzidas==0){
                $complemento="Preencha os campos Produção e Refugo para calcular seu Percentual de Qualidade, PPM e Nível Sigma!!!";
                $figura="duvida.png";
                $percentual=0;
                $ppm=0;
                $sigma=0;
            }else{
                $percentual=($falhas/$produzidas)*100;
                $ppm=($falhas/$produzidas)*1000000;
                $sigma=0.8406+sqrt(29.37-2.221*log($ppm));
                $complemento="Seu Nível Sigma é ".number_format($sigma,0)."! Lembre-se: Quanto maior o Nível Sigma do processo observado, melhor para o processo é!!!";
                $figura="duvida.png";}
        ?>
        <!--Lógica PHP-->
        <form action="ppmResultados.php" class="form-horizontal">
            <div class="form-group">
                <label class="col-md-6 control-label" for="%Refugo"><h3>% de Refugo:</h3></label>
                    <div class="col-md-6">    
                        <input  class="form-control" type="text" value="<?php echo number_format($percentual,2)." %" ?>" name="%percentual" placeholder="%"/>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-md-6 control-label" for="PPM Refugado"><h3>PPM Refugado:</h3></label>
                    <div class="col-md-6">    
                        <input  class="form-control" type="text" value="<?php echo number_format($ppm,0)." PPM"?>" name="PPM Refugado" placeholder="PPM"/>
                    </div>
            </div>
            <div class="form-group">
                <label class="col-md-6 control-label" for="PPM Refugado"><h3>Nível Sigma:</h3></label>
                    <div class="col-md-6">    
                        <input  class="form-control" type="text" value="<?php echo number_format($sigma,2)." Sigma"?>" name="Nivel Sigma" placeholder="Sigma"/>
                    </div>
            </div>
        </form>
        
        <div class="col-md-12">
        <?php
                
        if ($figura=="duvida.png"){
            echo '<div class="col-md-2">
                        <img src="assets/images/'.$figura.'" width="70%">
                      </div>
                      <div class="col-md-10">
                        <h2>'.$complemento.'</h2>
                      </div>';} 
        ?>
            </div>                    
        </div>
                             
    <div class="container col-md-6">
        <h2 align="center">Entenda o indicador!</h2>
            <div align="center">
                <a href="assets/images/refugo.png" target="_blank"><img align="center" src="assets/images/refugo.png" alt="croquiPPM" title="" style="height: 36rem;"></a>
                <h3>Clique para expandir!</h3>
            </div>
    </div>

    <div class="col-md-8">
        <h2 align="center">Necessita de ajuda para estudar seus desvios de qualidade?<br><a href="index.html#contact">Entre em contato com a gente clicando aqui!</a>
        </h2>        
    </div>
    </section>
    <script src="assets/setup/js/jquery.js"></script>
        <script src="assets/setup/js/bootstrap.min.js"></script>
        <script src="assets/setup/script.js"></script>
    </body>
    
    <footer>
        <div align="center">
            <h2><b>Acesse nossas Redes Sociais!</b></h2>
        </div>
        
        <div class="container" align="center">
            <div class="row">
                
                <a href="https://www.linkedin.com/company/piece-consultoria" target="_blank" class="row col-md-3"><img src="assets/images/linkedinLogo.png" width="15%"></a>

                <a href="https://www.facebook.com/Piece.Consultoria/?ref=br_rs" target="_blank" class="row col-md-3"><img src="assets/images/facebook.png" width="15%"></a>

                <a href="https://twitter.com/piececonsulta" target="_blank" class="row col-md-3"><img src="assets/images/Twitter_Logo_Blue.png" width="20%"></a>

                <a href="https://www.youtube.com/channel/UCGN4W96_gbx1vp9LWfhB_fw" target="_blank" class="row col-md-3"><img src="assets/images/youtube.png" width="23%"></a>
                
            </div>
        </div><!--Logos das Redes Sociais-->
        <div align="center">
            <small>&copy; Copyright 2019 - Piece Consultoria todos os direitos reservados.</small>
        </div>
    </footer>
    </html>