<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
        
    </head>


    <body>
        <header>
            <div class="container">
                <div class="flex">
                        <div class="logo"> 
                        <!-- <img src="../IMAGENES/logo1.jpeg" class="rounded float-left" alt="Logo"> -->
                        </div>   
                        <nav class="menu">
                            <ul> 
                            @if (Route::has('login'))
                                <li>
                                    @auth
                                    <a href="{{ url('/home') }}">Health Care</a>
                                </li>
                                    @else
                                <li> 
                                    <a href="{{ route('login') }}">Iniciar sesión</a>
                                </li>
                                    @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}">Registrarse</a>
                                </li>
                                    @endif
                                    @endauth
                                </li>
                            @endif
                            </ul>
                        </nav>
                </div>
            </div>
        </header>
      <div > 
        <img  class="imagen" src="../IMAGENES/logo7.jpeg"  alt="Logo">
        </div> 
    </body>
</html>
