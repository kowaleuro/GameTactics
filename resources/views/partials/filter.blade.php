<p>
    <nav class="nav">
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#collapseSort" role="button" aria-expanded="false" aria-controls="collapseSort">
            Sort by
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#collapseFilter" role="button" aria-expanded="false" aria-controls="collapseFilter">
            Filters
        </a>
    </li>
    </nav>
</p>
<div class="collapse" id="collapseSort">
    <div class="card card-body">
        <form action="{{ route('strats.viewStrats') }}" method="post">
            <label for="cars">Choose a car:</label>
        </form>
    </div>
</div>

<div class="collapse" id="collapseFilter">
    <div class="card card-body">
        filter
    </div>
</div>
