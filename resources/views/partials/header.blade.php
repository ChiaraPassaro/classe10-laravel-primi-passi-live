<header>
    <img src="{{asset('img/logo.png')}}" alt="La Molisana">
    <nav>
        <ul>
            <li class="{{(url()->current() == route('home')) ? 'active' : ''}}">
                <a href="#">Home</a>
            </li>
            {{-- if(url()->current() == route('prodotti')) {

            }
            (url()->current() == route('prodotti') ? 'active' : '' --}}
            <li class="{{(url()->current() == route('prodotti')) ? 'active' : ''}}">
                <a href="{{route('prodotti')}}">Prodotti</a>
            </li>
            <li class="{{(url()->current() == route('contatti')) ? 'active' : ''}}">
                <a href="{{route('contatti')}}">Contatti</a>
            </li>
        </ul>
    </nav>
</header>
