@if (Route::has('login'))
    <nav class="flex items-center justify-end gap-4">
        @auth
            <a href="{{ url('/dashboard') }}"
                class="">
                Dashboard
            </a>
        @else
            <a href="{{ route('login') }}"
                class="">
                Log in
            </a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                    class="">
                    Register
                </a>
            @endif
        @endauth
    </nav>
@endif
