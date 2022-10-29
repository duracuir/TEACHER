 @extends('layouts/app')

 @section('title' ,'About-Us  |' . config('app.name'))

 

 @section ('content')
 
 <img src="{{ asset('images/logo.png')}}" alt="Logo Minilux">
        <h1>
        Built with <span class="text-pink-500">&hearts;</span> by Escort Girl Cameroun
        </h1>
        <p>
            <a href="{{route('home')}}">Revenir à la page d'accueil
            </a>
        </p>

            
             
   @endsection