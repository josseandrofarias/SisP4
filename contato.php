<html>
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
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
<?php include_once 'centro.html'; ?>
<!-----------------------------------Centro------------------------------------------------->
    <br>
    <div class="container">
        <div class="col-sm-12">
            <form>
                <div class="row" id="modals">
                    <div class="col-md-6">
                        <p>Nome:</p>
                        <div class='input-group'>
                            <input type='text' class="form-control" placeholder="Nome cliente"/>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </span>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <p>Telefone</p>
                        <div class='input-group'>
                            <input id="telefone" type='text' class="form-control" placeholder="(99) 9 9999-9999" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                            </span>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p>E-mail:</p>
                        <div class='input-group date' id='datetimepicker'>
                            <input type='text' class="form-control" placeholder="email@email.com" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-envelope">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="row" id="modals">
                    <div class="col-md-12">
                        <p>Assunto:</p>
                        <div class='input-group'>
                            <input type='text' class="form-control" placeholder="Nome cliente"/>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-pencil">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="row" id="modals">
                    <div class="col-md-12">
                        <p>Mensagem:</p>
                        <div class='input-group'>
                            <textarea type='text' class="form-control" placeholder="Mensagem"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Enviar</button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Enviado com Sucesso!</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Aguarde o conatato via e-mail ou Telefone!</p>
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
            </form>

            <div class="col-sm-12 center">
                <p> email@pizza.com.br</p>
                <p>+55 (67)9 9999-9999</p>

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

<script src="assets/js/bootstrap.js"></script>

<script src="assets/js/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/js/transicoes.js?v=2.1.0"></script>

</html>
