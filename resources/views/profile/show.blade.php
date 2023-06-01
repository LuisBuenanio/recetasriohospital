@extends('adminlte::page')


@section('title', 'Perfil')

@section('content_header')
<link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">


<!-- Fonts -->
<link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

<!-- Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])
<!-- Styles -->
@livewireStyles

@stop


@section('content')
@if(session('info'))
            <div class="alert alert-success">
                {{session('info')}}
            </div>
    @endif

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-jet-section-border />
            @endif        
        </div>
    </div>
@stop

@section('js')
@livewireScripts
@stop
