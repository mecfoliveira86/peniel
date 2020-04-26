<html>
<head>
        <title>Cálculo de OEE</title>
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
        
        <div align='center'><h1>Cálculo de OEE</h1></div>
        
        <div class="col-md-7">
            <form id="formEnvia" method="get" action="oeeSimples.php" class="form-vertical">

                <div class="col-md-6">

                    <div class="col-md-12">
                            <p class="col-md-12" style="text-indent:0em;">Disponibilidade do Equipamento para Operação no Período</p>
                        <div class="form-group">
                            <label class="col-md-6 control-label" for="horas">Dias:</label>
                            <div class="col-md-6">    
                                <input  class="form-control" type="number" name="dias" placeholder="dias"/>
                            </div>
                        </div>    

                        <div class="form-group">
                            <label class="col-md-6 control-label" for="horas">Horas por dia:</label>
                            <div class="col-md-6">    
                                <input  class="form-control" type="number" name="horas" placeholder="horas"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                            <p class="col-md-12">Paradas Diárias Planejadas no Período</p>
                        <div class="form-group">
                            <label class="col-md-6 control-label" for="horas">Limpeza/Laboral:</label>
                            <div class="col-md-6">    
                                <input  class="form-control" type="number" name="limpeza" placeholder="min."/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-6 control-label" for="horas">Manutenções:</label>
                            <div class="col-md-6">    
                                <input  class="form-control" type="number" name="manutencaoPequena" placeholder="min."/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-6 control-label" for="horas">Refeição:</label>
                            <div class="col-md-6">    
                                <input  class="form-control" type="number" name="refeicao" placeholder="min."/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-6 control-label" for="horas">Reuniões TPM:</label>
                            <div class="col-md-6">    
                                <input  class="form-control" type="number" name="TPM" placeholder="min."/>
                            </div>  
                        </div>
                    </div>

                </div>

                <!--Segunda Coluna-->

                <div class="col-md-6">

                    <div class="col-md-12">
                        <p class="col-md-12">Dados de Produção no Período</p>

                        <div class="form-group">
                            <label class="col-md-6 control-label" for="horas">Peças Feitas:</label>
                            <div class="col-md-6">    
                                <input  class="form-control" type="number" name="produzidas" placeholder="un"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-6 control-label" for="horas">Peças Ruins:</label>
                            <div class="col-md-6">    
                                <input  class="form-control" type="number" name="rejeitadas" placeholder="un"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-6 control-label" for="horas">Peças/Hora:</label>
                            <div class="col-md-6">    
                                <input  class="form-control" type="number" name="cicloTeorico" placeholder="Pçs"/>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-12">
                        <p class="col-md-12">Interrupções não Planejadas no Período</p>

                        <div class="form-group">
                            <label class="col-md-6 control-label" for="horas">Quebra:</label>
                            <div class="col-md-6">    
                                <input  class="form-control" type="number" name="quebra" placeholder="min."/>
                            </div>
                        </div>    

                        <div class="form-group">
                            <label class="col-md-6 control-label" for="horas">Setups:</label>
                            <div class="col-md-6">    
                                <input  class="form-control" type="number" name="tempoSetup" placeholder="min."/>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-6 control-label" for="horas">Ajustes:</label>
                            <div class="col-md-6">    
                                <input  class="form-control" type="number" name="tempoAjuste" placeholder="min."/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-6 control-label" for="horas">Ferramental:</label>
                            <div class="col-md-6">    
                                <input  class="form-control" type="number" name="tempoFerramenta" placeholder="min."/>
                            </div>
                        </div>

                    </div>

                    <div>
                        <div class="col=md-12">
                            <label class="col-md-5 control-label" for="espaco"></label>
                        </div>
                    </div>
                 </div>

                <!-- Botao-->
                    <div class="col-md-12">
                        <div class="col-md-6 col-md-offset-3">
                            <input  class="btn btn-primary btn-block" align="center" type="submit" value="Calcular OEE">
                        </div>
                    </div>
                </form>
            
            <!--php--><div>
        <?php
            /*Carregamento de variáveis*/    
            $dias = isset($_GET["dias"])?$_GET["dias"]:0;
            $horas = isset($_GET["horas"])?$_GET["horas"]:0;
            $manutencaoPequena = isset($_GET["manutencaoPequena"])?$_GET["manutencaoPequena"]:0;
            $limpeza = isset($_GET["limpeza"])?$_GET["limpeza"]:0;
            $refeicao = isset($_GET["refeicao"])?$_GET["refeicao"]:0;
            $TPM = isset($_GET["TPM"])?$_GET["TPM"]:0;
            $quebra = isset($_GET["quebra"])?$_GET["quebra"]:0;
            //$evSetup = $_GET["evSetup"];
            $tempoSetup = isset($_GET["tempoSetup"])?$_GET["tempoSetup"]:0;
            //$evAjuste = $_GET["evAjuste"];
            $tempoAjuste = isset($_GET["tempoAjuste"])?$_GET["tempoAjuste"]:0;
            //$evFerramenta = $_GET["evFerramenta"];
            $tempoFerramenta = isset($_GET["tempoFerramenta"])?$_GET["tempoFerramenta"]:0;
            $produzidas = isset($_GET["produzidas"])?$_GET["produzidas"]:0;
            $rejeitadas = isset($_GET["rejeitadas"])?$_GET["rejeitadas"]:0;
            $cicloTeorico = isset($_GET["cicloTeorico"])?$_GET["cicloTeorico"]:0;
        
        if ($cicloTeorico==0){
            $cicloTeorico=0;
        }else{
            $cicloTeorico=60/$cicloTeorico;
        }
        
        if($dias*$horas*$produzidas*$cicloTeorico==0){ 
        $tempoTotalOperação=0;
        $tempoParadaProgramada=0;    
        $tempoDispUtil=0;
        $tempoParada=0;
        $tempoTrabalhado=0;
        $indDisp=0;
        $indDesempenho=0;
        $indQualidade=0;
        $tempoQualidade=0;
        $oee=0;
        $desvios=0;
        $tempoLiquido=0;
        $tempoEfetivo=0;
        
        } else{
            
            $tempoTotalOperação=$dias*$horas*60;
    
            $tempoParadaProgramada=$dias*($manutencaoPequena+$limpeza+$refeicao+$TPM);
        
            $tempoDispUtil = $tempoTotalOperação-$tempoParadaProgramada;
        
            $tempoParada=$quebra+($tempoSetup)+($tempoAjuste)+($tempoFerramenta);
                
            $tempoTrabalhado=$tempoDispUtil-$tempoParada;
                
            $indDisp=(($tempoDispUtil-$tempoParada)/$tempoDispUtil);
                
            $indDesempenho=($cicloTeorico*$produzidas/$tempoTrabalhado);
                
            $indQualidade=(($produzidas-$rejeitadas)/$produzidas);
        
            $tempoQualidade=($rejeitadas*$cicloTeorico);
        
            //$indVelocidade=$cicloTeorico/$cicloReal;
                    
            $oee=($indDisp*$indDesempenho*$indQualidade);
                        
            //$perdavelocidade=(1-$indVelocidade)*$tempoTrabalhado;
                
            if(($tempoTrabalhado-($cicloTeorico*$produzidas))<0){
                $desvios=0;
              } else{
                $desvios=$tempoTrabalhado-($cicloTeorico*$produzidas);
            }
                    
            $tempoLiquido=$tempoTrabalhado-$desvios;
        
            $tempoEfetivo=$tempoLiquido-$tempoQualidade;}
            ?>
            </div><!--php-->
            
            <!-- Quadro de Resultados --><div class="col-md-12" align="center">

            <?php

            $imagem=0;
            $duvida='<img align="center" widht="15%" height="15%" src="assets/images/duvida.png">';
            $ok='<img align="center" widht="15%" height="15%" src="assets/images/ok2.png">';
            $nok='<img align="center" widht="15%" height="15%" src="assets/images/nok2.png">';

            if($dias+$horas+$produzidas+$cicloTeorico==0){
                $decisao="Preencha os dados acima para calcular seu OEE";
                $imagem=$duvida;
                }else {
                if($dias*$horas*$produzidas*$cicloTeorico==0){
                            $decisao="Há dados essenciais faltantes para realização do cálculo de OEE";
                            $imagem=$duvida;
                            } else{
                                if($oee<0.85){
                                    $decisao="O processo produtivo no período sob análise necessita de melhorias.<br>A Piece pode te ajudar!";
                                    $imagem=$nok;
                                    } else {
                                    $decisao="O processo produtivo no período sob análise tem um índice de OEE bom!!!<br>Mas sempre há algo para melhorar!!!";
                                    $imagem=$ok;
                                    }
                                }
                        }
            ?>
            <div class="col-md-8 col-md-offset-2" align="center">
                <div><?php echo $imagem ?></div>
                <h2><?php echo $decisao ?></h2>
                <h2><a href="index.html#contact">Clique aqui e veja como entrar em contato conosco!!!</a></h2>
            </div>
        </div><!-- Quadro de Resultados -->
        </div><!-- Inserir aqui!!! -->
               
        
  
        <!-- Formulário de Resultados --><div class="col-md-5 primeiro">
            <form action="formOEE.php" class="form-vertical">

            <!--Indices-->
            
            <div class="col-md-12">
                <div class="form-group">
                    
                    <label class="col-md-12">
                        <h2 align="justified">Resultados:</h2>
                    </label>
                    
                    <label class="col-md-12 control-label" for="horas">
                        <h3>Disponibilidade:</h3>
                    </label>
                    
                    <div class="col-md-10">    
                        <input  class="form-control" type="text" value="<?php echo number_format($indDisp*100,2)."%" ?> "  name="indDisp" 
                        placeholder="Índice de Disponibilidade"/>
                    </div>
                    
                    <label class="col-md-12 control-label" for="horas">
                        <h4>Referente a quanto o equipamento está disponível para trabalho.</h4>
                    </label>
                </div>
            </div>
            
            <div class="col-md-12">
                
                <div class="form-group">
                    <label class="col-md-12 control-label" for="horas">
                        <h3>Performance</h3>
                    </label>
                    
                    <div class="col-md-9">    
                        <input  class="form-control" type="text" value="<?php echo number_format($indDesempenho*100,2)."%" ?> "  name="indPerf" placeholder="Índice de Performance"/>
                    </div>
                    
                    <label class="col-md-12 control-label" for="horas">
                        <h4>Evidencia perdas com velocidade e pequenas paradas.</h4>
                    </label>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label class="col-md-12 control-label" for="horas"><h3>Qualidade</h3></label>
                    <div class="col-md-8">    
                        <input  class="form-control" type="text" value="<?php echo number_format($indQualidade*100,2)."%" ?> "  name="indQua" placeholder="Índice de Performance"/>
                    </div>
                    <label class="col-md-12 control-label" for="horas"><h4>Nível de eficácia do processo.</h4></label>
                </div>
            </div>
                        
            <div class="col-md-12">
                <div class="form-group">
                    <label class="col-md-12 control-label" for="horas"><h3>OEE</h3></label>
                    <div class="col-md-7">    
                        <input  class="form-control" type="text" value="<?php echo number_format($oee*100,2)."%"?> "  name="OEEFinal" placeholder="Tempo Líquido"/>
                    </div>
                    <label class="col-md-12 control-label" for="horas"><h4>Indica, em percentual, o rendimento dos recursos da operação.</h4></label>
                </div>
            </div>
        </form>
        </div><!-- Formulário de Resultados -->
    
        
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