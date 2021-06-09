<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">

    <title>GSA-Ofícial</title>

    <style>
        div.titulo {
            height: 1px;
            background-color: #333;
            text-align: center;
        }

        div.titulo span {
            background-color: white;
            position: relative;
            top: -0.5em;
            padding: 0 10px;
            color: blue;
        }

        .fot {
            text-align: center;
            color: #1A0411;
            width: 100%;
            background-color: #938E91;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-red bg-dark text-light">
        <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-globe" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4H2.255a7.025 7.025 0 0 1 3.072-2.472 6.7 6.7 0 0 0-.597.933c-.247.464-.462.98-.64 1.539zm-.582 3.5h-2.49c.062-.89.291-1.733.656-2.5H3.82a13.652 13.652 0 0 0-.312 2.5zM4.847 5H7.5v2.5H4.51A12.5 12.5 0 0 1 4.846 5zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5H7.5V11H4.847a12.5 12.5 0 0 1-.338-2.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12H7.5v2.923c-.67-.204-1.335-.82-1.887-1.855A7.97 7.97 0 0 1 5.145 12zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11H1.674a6.958 6.958 0 0 1-.656-2.5h2.49c.03.877.138 1.718.312 2.5zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12h2.355a7.967 7.967 0 0 1-.468 1.068c-.552 1.035-1.218 1.65-1.887 1.855V12zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5h-2.49A13.65 13.65 0 0 0 12.18 5h2.146c.365.767.594 1.61.656 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4H8.5V1.077c.67.204 1.335.82 1.887 1.855.173.324.33.682.468 1.068z" />
        </svg>
        <a class="navbar-brand text-light" href="index.php" style="margin: 4px;"> Internationally GSA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" style="color: #aa88ff;" href="index.php">Início <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: #aa88ff;" href="empresa-cadastrar.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Empresa
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="main.php?page=empresa-cadastrar">Cadastrar Empresa</a>
                        <a class="dropdown-item" href="main.php?page=empresa-consultar">Consultar Empresa</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: #aa88ff;" href="atendente-cadastrar.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Atendentes
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="main.php?page=atendente-cadastrar">Cadastrar Atendente</a>
                        <a class="dropdown-item" href="main.php?page=atendente-consultar">Consultar Atendente</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: #aa88ff;" href="final-cadastrar.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Empresas e Funcíonarios
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="main.php?page=final-cadastrar">Empregar</a>
                        <a class="dropdown-item" href="main.php?page=final-consultar">Consultar Funcionarios/Empresas</a>
                    </div>
                </li>

            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12">
                <?php
                //conexão com o banco de dados
                include("config.php");

                //chamar as páginas
                switch (@$_REQUEST["page"]) {

                        //Empresa

                    case 'empresa-cadastrar':
                        include("empresa-cadastrar.php");
                        break;
                    case 'empresa-consultar':
                        include("empresa-consultar.php");
                        break;
                    case 'empresa-editar':
                        include("empresa-editar.php");
                        break;
                    case 'empresa-salvar':
                        include("empresa-salvar.php");
                        break;



                        //Atendente

                    case 'atendente-cadastrar':
                        include("atendente-cadastrar.php");
                        break;
                    case 'atendente-consultar':
                        include("atendente-consultar.php");
                        break;
                    case 'atendente-editar':
                        include("atendente-editar.php");
                        break;
                    case 'atendente-salvar':
                        include("atendente-salvar.php");
                        break;

                        //Final

                    case 'final-cadastrar':
                        include("final-cadastrar.php");
                        break;

                    case 'final-consultar':
                        include("final-consultar.php");
                        break;

                    case 'final-salvar':
                        include("final-salvar.php");
                        break;

                    case 'final-editar':
                        include("final-editar.php");
                        break;

                    default:
                        @include("main.php");
                        break;
                }

                ?>
            </div>
        </div>



        <footer class="fot">
            <p><strong> Autor: &copy;Marcos Rian </strong>
                <br>Telefone: (61) 9xxxx-xxxx
            </p>
        </footer>

        <script src="bootstrap-4.5.3-dist/js/jquery-3.5.1.slim.min.js"></script>
        <script src="bootstrap-4.5.3-dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>