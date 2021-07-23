<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">GameTactics</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('main') }}">Main</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('strats.viewStrats') }}">View Strats</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('strats.createStrat') }}">Create Strats</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('nades.viewNades') }}">View Nades</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('nades.createNades') }}">Create Nades</a>
            </li>

        </ul>
    </div>
</nav>
