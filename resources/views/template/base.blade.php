<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta property="og:title" content="Bem-vindo(a)! | Academia do Colaborador" />
        <meta property="og:description" content="Academia do Colaborador - pessoas valorizando pessoas." />
        <meta name="description" content="Academia do Colaborador - pessoas valorizando pessoas." />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bem-vindo(a)! | Academia do Colaborador</title>
        <!--Icons made by Freepik from www.flaticon.com-->
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        
        

        <style>
            header{
                background-color: white;
                line-height: 60px;
            }

            header span .brand, 
            header span h1,
            header span img,
            header nav{
                display: inline-block;
            }

            header .brand a{
                text-decoration: none;
            }

            header nav{
                float: right;;
            }

            header nav a{
                display: inline-block;
                padding-left: 8px;
                padding-right: 8px;
                text-decoration: none;
                color: #00578A;
            }

            header nav a:hover{
                color: #0588BC;
                background-color: rgba(0,0,0,0.1);
            }

            main{
                margin-top:100px;
                min-height: 100vh;
            }

            main section{
                min-height: 100vh;
            }

            footer{
                padding-top: 20px;
                line-height: 80px;
                background-color: #FFF;
            }
        </style>

        @section('head_local')
                
        @show;

        </head>
    <body>
    <div class="container">
        <header class="row">
            <div class="col-6">
                <span class="brand">
                    <a href="/" style="color: black;">
                        <h1 style="font-size: 22px;">Academia do Colaborador</h1>
                    </a>
                </span>
            </div>
            <div class="col-6">
                <nav>
                    <a href="/catalogo-de-certificacoes">Catálogo</a><a href="/meu-perfil">Perfil</a>
                </nav>
            </div>
        </header>

        <main>
        @section('main')
        @show
        </main>

        <footer class="row">
            <div class="col-12">
                <p class="text-center"><i>Academia do Colaborador - pessoas valorizando pessoas.</i></p>
            </div>
        </footer>

    </div>
    <!-- Bootstrap Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

    </body>
</html>