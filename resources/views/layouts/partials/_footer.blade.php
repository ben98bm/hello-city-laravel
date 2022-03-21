<footer>
           <p class="text-gray-400">
                &copy; Copyrights {{ date('Y') }} 
                @if(! Route::is('about'))
                &middot; <a href="{{ route('about')}}" class="text-indigo-500
                hover:text-indigo-600 underline">About us</a>
                @endif             
            </p>
</footer>