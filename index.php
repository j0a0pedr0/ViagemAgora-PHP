<?php
$pdo = new PDO('mysql:host=localhost;dbname=projeto_bootstrap','root','');
$sobre = $pdo->prepare("SELECT * FROM `tb_sobre`");
$sobre->execute();
$sobre = $sobre->fetch()['sobre'];


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Projeto-bootstrap</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://localhost/Site_bootstrap_CMS/">ViagemAgora.Com</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a ref-sys="home" href="#">Home</a></li>
            <li><a ref-sys="sobre" href="#">Sobre</a></li>
            <li><a ref-sys="contato" href="#">Contato</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="box">
        <section id="home" class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>ViagemAgora.com</h2>
                        <p>Descubra os melhores lugares e destinos turísticos do mundo com viagemAgora.com</p>
                        <a href="">Quero!</a>
                    </div><!--col-md-12-->
                </div><!--row-->
            </div><!--container-->
            <div class="overlay"></div>
        </section><!--banner-->

        <section class="cadastro-lead">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6">
                        <h2>Entre na nossas lista!</h2>
                    </div><!--col-md-6-->
                    <div class="col-md-6">
                        <form method="POST">
                            <input type="text" name="nome"/>
                            <input type="submit" name="acao" value="Participar!"/>
                        </form>    
                    </div><!--col-md-6-->
                </div><!--row-->
            </div><!--container-->
        </section><!--cadastro-lead-->

        <section class="depoimento">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="titulo-mobile">Depoimento</h2>
                        <blockquote>
                        <p class="texto-normal">"Foi a Melhor viagem da minha vida, Hospedagem ótima, Comida a vontade, meu me senti no ceú...Já to pensando na proxima,<br>graças a  <b>ViagemAgora.Com </b>posso viajar pagando pouco!"</p>
                        </blockquote>
                    </div><!--col-md-12-->
                </div><!--row-->
            </div><!--container-->
        </section><!--depoimento-->

        <section id="sobre" class="diferenciais">
            <div class="overlay"></div>
            <div class="container text-center">
                <h2 class="titulo-mobile">Conheça Nossa Companhia</h2>
                <div class="row text-center"><?php echo $sobre ?></div><!--row-->
            </div><!--container-->
        </section><!--diferenciais-->

        <section class="equipe text-center">
            <h2 class="titulo-mobile">Quem Somos?</h2>
            <div class="container">
                <div class="row">
                    <?php
                            $equipe = $pdo->prepare("SELECT * FROM `tb_equipe`");
                            $equipe->execute();
                            $equipe = $equipe->fetchAll();
                        
                        foreach($equipe as $key => $value){
                    ?>
                        <div class="col-md-6">
                            <div class="equipe-single">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="user-picture" style="background-size:cover;background-position:center;background-image:url('./painel/uploads/<?php echo $value['img']; ?>');"></div>
                                    </div><!--col-md-3-->
                                    <div class="col-md-10">
                                        <h3><?php echo $value['nome']; ?></h3>
                                        <p class="texto-normal"><?php echo $value['descricao']; ?></p>
                                    </div><!--col-md-9-->
                                </div><!--row-->
                            </div><!--equipe-single-->
                        </div><!--col-md-6-->
                    <?php } ?>

                </div><!--row-->

            </div><!--container-->
        </section><!--Equipe-->

        <section class="final-site">
            <div class="container">
                <div class="row">
                    <div id="contato" class="col-md-6 text-center">
                        <h2 class="titulo-mobile">Entre Em Contato!</h2>
                        <form>
                            <div class="input-group">
                                <span class="input-group-addon glyphicon glyphicon-user" id="basic-addon1"></span>
                                <input type="text" class="form-control" name="nome" placeholder="Nome" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">@</span>
                                <input type="email" class="form-control" name="email" placeholder="E-Mail" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon glyphicon glyphicon-envelope" id="basic-addon1"></span>
                                <textarea class="form-control" placeholder="Sua Mensagem..."></textarea>
                            </div>
                            <a href="">Enviar</a>
                        </form>
                    </div><!--col-md-6-->

                    <div class="col-md-6 text-center">
                        <h2 class="titulo-mobile">Forúm</h2>
                        <table class="table" style="background-color:white;">
                            <thead>
                                <tr class="text-center">
                                    <th  scope="col">#</th>
                                    <th class="text-center" scope="col">First</th>
                                    <th class="text-center" scope="col">Last</th>
                                    <th class="text-center" scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!--col-md-6-->
                </div><!--row-->
            </div><!--container-->
        </section><!--final-site-->

        <footer class="text-center">
            <p>Todos os Direitos Reservados</p>
        </footer>
    </div><!--box-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $('.navbar-nav a').click(function(){
            var ref = '#'+$(this).attr('ref-sys');
            var offset = $(ref).offset().top;
            $('html,body').animate({'scrollTop':offset});

            if($(window)[0].innerWidth <= 768){
                $('.icon-bar').click();
            }

            return false;
        })

        cliqueMenu();
        function cliqueMenu(){
              $('.navbar-nav li a').click(function(){
                $('.navbar-nav a').parent().removeClass('active');
                $(this).parent().addClass('active');
                return false;
              });
            };
    </script>
  </body>
</html>