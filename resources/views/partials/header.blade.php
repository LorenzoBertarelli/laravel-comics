<nav class="bg-body-tertiary mt-5">
    <div class="container-fluid text-center d-flex justify-content-between">
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </div>
        <div id="navbarNav" class="d-flex align-items-center">
            <ul class="list-unstyled d-flex">
                <li class="nav-item mx-3">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">CHARACTERS</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/') }}">COMICS</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/') }}">MOVIE</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/') }}">TV</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/') }}">GAMES</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/') }}">VIDEOS</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/') }}">CFANS</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{ url('/') }}">NEWS</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<style>
    .bg-body-tertiary {
        height: 150px;
        margin: 0 auto;
        max-width: 1200px;
    }
</style>
