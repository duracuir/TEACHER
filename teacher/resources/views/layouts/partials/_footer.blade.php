<footer>
    <p class="text-gray-400">
        &copy; Copyright {{ date('Y')}} 
        &middot; Heure {{ date('H:i)}}
        @if(! Route::is('about'))
        <a class="text-indigo-500 hover:text-indigo-600" href="/about-us"></a></a>About Us </a>
        @endif
    </p>
</footer>