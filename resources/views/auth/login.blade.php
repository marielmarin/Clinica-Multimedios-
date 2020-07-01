<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Nuestro css-->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio sesión</title>

@extends('layouts.app')

@section('content') 
<div class="container">
    <section class="login">
        <h4>Iniciar sesión</h4>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group"id="email-group">
                     <input id="email" type="email" class="text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail">
                     @error('email')
                         <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                     @enderror  
                </div>

                <div class="form-group" id="contrasena-group">
                    <input id="password" type="password" class="text" name="password" required autocomplete="current-password" placeholder="Contraseña">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                    <button type="submit" class="btn btn-primary">
                        {{ __('Iniciar sesión') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="#" >
                            {{ __('¿Ólvido su contraseña?') }}
                        </a>
                    @endif              
            </form>
    </section>
</div>   
@endsection
