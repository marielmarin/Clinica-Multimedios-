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
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <title>Registro</title>

@extends('layouts.app')

    @section('content') 
    <div class="container">
        <section class="register">
            <h4>Crea una nueva cuenta</h4>  
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group" id="user-group">
                <input id="name" type="text" class=text name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>

                <div class="form-group"id="email-group">                  
                <input id="email" type="email" class="text" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>

                <div class="form-group" id="contrasena-group">
                    <input id="password" type="password" class="text" name="password" required autocomplete="new-password" placeholder="Contraseña">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                       
                </div>  
               
                <div class="form-group" id="contrasena-group">
                    <input id="password-confirm" type="password" class="text" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar contraseña">
                </div>
                <button type="submit" class="btn btn-primary">
                            {{ __('Registrarse') }}
                </button>                   
                <br>
                    <p>Estoy de acuerdo con <br><a href="#">Terminos & Condiciones</a></p>
               
            </form>
        </section>
    </div>
@endsection