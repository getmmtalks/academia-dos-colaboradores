<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
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
            
            #myVideo {
                position: absolute;
                z-index: -1;
                width:100%;     
                height: 100vh;
            }

            @media (min-aspect-ratio: 16/9) {
                #videoBG {
                    width:100%;
                    height: 100vh;
                }
            }

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
                float: right;
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

            #form-login{
                background-color: #FFF;
                padding: 12px;
                border-radius: 4px;
            }

            #advantages{
                display: block;
                background-color: #fff;
            }


        </style>

    </head>
    <body>
    <video autoplay muted loop id="myVideo">
        <source src="/videos/sketching_on_a_wall.webm" type="video/mp4">
    </video>

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
            
            <section class="row align-items-center">

                <div class="col-12">
                    <div class="login-area d-flex justify-content-center ">
                        <form id="form-login" action="javascript:return false;">
                            <h2>Acesse sua conta:</h2>
                            
                            <div class="form-group">
                                <label for="email">E-mail:</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Digite seu e-mail" required />
                                <small id="emailHelp" class="form-text text-muted">Digite o e-mail que está cadastrado pela sua instituição.</small>
                            </div>
                            <br />
                            <button type="submit" class="btn btn-success">Acessar</button>

                        </form>
                    </div>
                </div>

            </section>
            <section id="advantages">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <h2 class="pb-5">Benefícios e Vantagens</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Especialização</h5>
                                <p class="card-text">Se torne um especialista nos produtos e serviços utilizados na sua empresa.</p>            
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Certificação</h5>
                                <p class="card-text">Conquiste certificados digitais para comprovar e partilhar as suas habilidades.</p>            
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Points</h5>
                                <p class="card-text">Conquiste points e demonstre a sua evolução para a empresa.</p>            
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">On-line</h5>
                                <p class="card-text">Aproveite os benefícios e vantagens da Academia do Colaborador pela internet.</p>            
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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
