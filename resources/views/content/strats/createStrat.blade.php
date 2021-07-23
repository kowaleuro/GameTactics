@extends("layouts.master")

@section('content')

    @include('partials.alerts')

    @if(Session::has('info'))
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    {{Session::get('info')}}
                </div>
            </div>
        </div>
    @endif

    <div class="container">
        <form action="{{ route('strats.createStrat') }}" method="post">
            <div class="form-group row">
                <label for="inputTitle" class="col-1 col-form-label">Title</label>
                <div class="col-4">
                    <input type="text" name="title" class="form-control" id="inputTitle"  placeholder="Enter Title">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputMap" class="col-1 col-form-label">Map</label>
                <div class="col-4">
                    <select class="form-control" name="mapId">
                        @foreach($maps as $map)
                            <option value="{{ $map->id }}">{{ $map->map_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <textarea name="content" class="form-control" id="tactics" rows="5">
                        Enter Tactic
                    </textarea>
                </div>
            </div>
            {{ csrf_field() }}
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
