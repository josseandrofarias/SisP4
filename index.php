<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">

    <title>SisP4</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/style.css?v=2.1.0" rel="stylesheet"/>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet" />

</head>
<body>
<!-----------------------barra_top------------------------------------->
    <?php include_once 'topoNavBar.html'; ?>
<!------------------------------------------------------------------------------------------>

<!-----------------------------------Centro------------------------------------------------------>
    <?php include_once 'centro.html'; ?>
        <!--------------------------------------------------------------------------------------------------->

        <!------------------------------------------empresa--------------------------------------------------->
        <div class="main">
            <div class="section section-buttons">
                <div class="container">
                    <div class="tim-title">
                        <h2>Empresa</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <ul id="tabs" class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active text-primary" data-toggle="tab" href="#missao" role="tab">Missão</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-success" data-toggle="tab" href="#visao" role="tab">Visão</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-warning" data-toggle="tab" href="#valores" role="tab">Valores</a>
                                    </li>
                                </ul>
                            </div>
                        </div>


                        <div id="my-tab-content" class="tab-content text-center">
                            <div class="tab-pane active" id="missao" role="tabpanel">
                                <p>TODO MUNDO QUER ATENÇÃO</p>
                                <p>Serviço de qualidade não é luxo.</p>
                                <p>É o nosso modelo.</p>
                            </div>
                            <div class="tab-pane" id="visao" role="tabpanel">
                                <p>TEM LUGAR MELHOR DO QUE NOSSA CASA?</p>
                                <p>A gente trabalha para todo mundo sentir-se parte da família e criar oportunidades de uma vida melhor.</p>
                            </div>
                            <div class="tab-pane" id="valores" role="tabpanel">
                                <p>HOSPITALIDADE, SABOR E PREÇOS JUSTOS</p>
                                <p>Uma combinação imbatível para valorizar você.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!------------------------------------------------------------------------------------------------------->


        <!------------------------------------------pages-------------------------------------------------------->
            <div class="section section-navbars">
                <div id="navbar">
                    <div class="navigation-example">
                        <nav class="navbar navbar-expand-md navbar-transparent nav-no-padding">
                            <div class="container">
                                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar-transparent" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-bar"></span>
                                    <span class="navbar-toggler-bar"></span>
                                    <span class="navbar-toggler-bar"></span>
							    </button>
                                <a class="navbar-brand" href="#">Melhor Pizza</a>
                                <div class="collapse navbar-collapse" id="navbar-transparent">
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        <!----------------------------------------------------------------------------------------------->

        <!-----------------------------formulário------------------------------------------------------->
            <div class="section javascript-components">
				<div class="container">
					<div class="tim-title">
						<h2>Reservas de  Mesas</h2>
					</div>
                    <form>
                        <div class="row" id="modals">
                            <div class="col-md-6">
                                    <p>Nome do reservante:</p>
                                    <div class='input-group'>
                                        <input type='text' class="form-control" placeholder="Nome cliente"/>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"><i class="fa fa-user" aria-hidden="true"></i></span>
                                        </span>
                                    </div>
                            </div>
                            <div class="col-md-2">
                                    <p>Telefone</p>
                                    <div class='input-group'>
                                        <input id="telefone" type='text' class="form-control" placeholder="(99) 9 9999-9999" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                        </span>
                                </div>
                            </div>
                            <div class="col-md-2">
                                    <p>Data e Hora:</p>
                                    <div class='input-group date' id='datetimepicker'>
                                        <input type='text' class="form-control datetimepicker" placeholder="05/08/2017" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                        </span>
                                    </div>
                                </div>
                            <div class="col-md-2">
                                    <p>Qtd de Pessoas</p>
                                    <div class='input-group'>
                                        <input type='text' class="form-control" placeholder="1" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"><i class="fa fa-group" aria-hidden="true"></i></span>
                                        </span>
                                    </div>
                                </div>
                        </div>
                    </form>

                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Reservar</button>

                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">

                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Reserva realida com sucesso!</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Para enventuais Dúvidas, entrar em contato via email ou telefone.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!------------------------------------------------------------------------------------->
<!--------------------------------carousel--------------------------------------------->
			<div class="section" id="carousel">
				<div class="container">
                    <div class="tim-title">
                        <h3>Imagens Cardapio</h3>
                    </div>

                    <div class="row">
						<div class="col-md-8 ml-auto mr-auto">
							<div class="card page-carousel">
								<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
								    <ol class="carousel-indicators">
    								    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    								    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    								    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
								    </ol>
                                    <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img class="d-block img-fluid" src="assets\img\pizzaCalabresa.jpg" alt="Pizza de Calabresa">
                                    	<div class="carousel-caption d-none d-md-block">
                                            <p>Pizza de Calabresa</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="assets\img\pizzaBacon.jpg" alt="Pizza de Bacon">
                                    	<div class="carousel-caption d-none d-md-block">
                                    	    <p>Pizza de Bacon</p>
                                    	</div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block img-fluid" src="assets\img\pizza4Queijo.jpg" alt="Pizza de Quatro Queijo">
                                    	<div class="carousel-caption d-none d-md-block">
                                    	    <p>Pizza de Quatro Queijo</p>
                                    	</div>
                                    </div>
                                    </div>

                                    <a class="left carousel-control carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="fa fa-angle-left"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="fa fa-angle-right"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
	</div>

<!---------------------------------------------------------->
    <?php include_once 'footer.html'; ?>
</body>

<script src="assets/js/jquery-3.2.1.js" type="text/javascript"></script>
<script src="assets/js/jquery-ui-1.12.1.custom.min.js" type="text/javascript"></script>
<script src="assets/js/popper.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<script src="assets/js/bootstrap-switch.min.js"></script>

<script src="assets/js/nouislider.js"></script>

<script src="assets/js/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/js/paper-kit.js?v=2.1.0"></script>

</html>