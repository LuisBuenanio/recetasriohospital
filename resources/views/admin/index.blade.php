@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center text-bold py-8">Recetas Electrónicas Rio Hospital</h1>
@stop

@section('content')
    <p class="text-left text-bold py-8">Bienvenido al Panel de Administración.</p>
   
    <div class="text-center py-8">
        <img class =" object-fill  object-left-bottom" src="{{asset('img/logos/logo_admin.png')}}" alt="">
          
        
    </div> 
    <!-- Footer Content -->
    <footer class="mt-4 px-3 py-2 text-sm font-medium flex justify-center bg-red-100 shadow ">
        <div class=" text-black">
            <p class="text-center text-sm font-medium">  © 2023 MEGASYSTEMS - RIOBAMBA </p>               
            <p class="text-center">Desarrollado por: J.L SOLUTIONS S.A - 0992823863 </p>  
        </div>          
    </footer> 
@stop

@section('css')
    <style>
        .prueba{
            height: 600px;
            width: 540px;
            margin: auto;
            
        }
        .image-wrapper{
            position: relative;
            padding-bottom: 56.25%;
        }

        .image-wrapper img{
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop