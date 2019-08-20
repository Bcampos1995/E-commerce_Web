<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>OnurbTec - Loja Virtual</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">OnurbTec</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                 <li>
                                <a href="SobreaLoja.html">Sobre a Loja</a>
                            </li>
                            <li>
                                <a href="ComoComprar.html">Como Comprar</a>
                            </li>
                            <li>
                                <a href="Seguranca.html">Segurança</a>
                            </li>
                            <li>
                                <a href="Envio.html">Envio</a>
                            </li>
                            <li>
                                <a href="Pagamento.html">Pagamento</a>
                            </li>
                            <li>
                                <a href="Atendimento.html">Central de Atendimento</a>
                            </li>
                            <li>
                                <a href="Cadastro.html">Cadastre-se</a>
                            </li>
                            <li>
                                <a href="Login.html">Login</a>
                            </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	<div class="container">
	<?php 

			$nome 			 = $_POST['nome'];
			$sobrenome 		 = $_POST['sobrenome'];
			$email  	 	 = $_POST['email'];
			$telefone  		 = $_POST['telefone'];
			$senha  	 	 = $_POST['senha'];
			$erro 			 = 0;

			//Verifica se o campo nome não está em branco
			if (empty($nome) OR strstr($nome,' ')==true) {
				echo "Favor digitar o seu nome corretamente.<br>";
				$erro = 1;
			}

            //Verifica se o campo nome não está em branco
            if (empty($sobrenome) OR strstr($sobrenome, ' ')==true) {
                echo "Favor digitar o seu sobrenome corretamente.<br>";
                $erro = 1;
            }

			//Verifica se o campo email está preenchido corretamente
			if (strlen($email)< 8 || strstr($email, '@')==false) {
				echo "Favor digitar o seu email corretamente.<br>";
				$erro = 1;
			}

			//Verifica se o campo nome não está em branco
            if (empty($telefone) OR strstr($telefone, ' ')==true) {
                echo "Favor digitar o seu sobrenome corretamente.<br>";
                $erro = 1;
            }

            //Verifica se o campo nome não está em branco
            if (empty($senha) OR strstr($senha, ' ')==true) {
                echo "Favor digitar senha.<br>";
                $erro = 1;
            }

			//Verifica se não houve erro - neste caso chama a include para inserir os dados
			if ($erro == 0) {
				echo "Todos os dados foram digitados corretamente.<br>";
				include 'insere.inc';
			}

			 ?>
	</div>
    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Desenvolvimento OnurbTec</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>