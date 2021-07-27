<p>

    <div class="d-flex flex-row-reverse">
        <div class="p-2">
            <a class="nav-link" data-toggle="collapse" href="#collapseFilter" role="button" aria-expanded="false" aria-controls="collapseFilter">
                <button type="button" class="btn btn-secondary">Filters</button>
            </a>
        </div>
    </div>
</p>

<div class="collapse" id="collapseFilter">
    <div class="card card-body">
        <form action="{{route('strats.viewStrats')}}" method="GET">
            <div class="d-flex flex-row">
                <div class="p-2">
                    <div class="form-group">
                        <select class="form-control" name="sort">
                            <option value="">
                                Sort by
                            </option>

                            <option value="-likes_count">
                                Likes
                            </option>

                            <option value="updated_at">
                                Date: Old to New
                            </option>

                            <option value="-updated_at">
                                Date: New to Old
                            </option>
                        </select>
                    </div>
                </div>

                <div class="p-2">
                    <div class="form-group">
                        <select class="form-control" name="filter[map_id]">
                            <option value="">
                                Map
                            </option>
                            @foreach($maps as $map)
                                <option value="{{$map->id}}">
                                    {{$map->map_name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="p-2">
                    <button type="submit" class="btn btn-secondary">Filter</button>
                </div>
            </div>
        </form>

    </div>
</div>
