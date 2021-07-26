@extends("layouts.master")

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12"
                @include("partials.filter")
            </div>
        </div>
    </div>
    <div class="container">
        @foreach($tactics as $tactic)
            <section>
                <div class="card">
                    <div class="header">
                        <div class="row">
                            <div class="col-md-3 col-lg-3 col-xl-3 col-sm-3 col-4">
                                <p style="text-align: left">{{$tactic->map->map_name}}</p>

                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6 col-sm-6 col-4 ">
                                <h5 style="text-align: center">{{$tactic->tactic_name}}</h5>
                            </div>
                            <div class="col-md-1 col-lg-2 col-xl-2 col-sm-1 col-1">
                                <a href="{{route('strats.like',['id' => $tactic->id])}}">
                                    <p style="text-align: right">&#128151</p>
                                </a>
                            </div>
                            <div class="col-md-1 col-lg-1 col-xl-1 col-sm-2 col-2">
                                <p style="text-align: center">{{count($tactic->likes)}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p style="text-align: center">
                            {{$tactic->tactic_description}}
                        </p>


                    </div>
                    <div class="footer">
                        <a href="{{ route('strats.read',['id' => $tactic->id]) }}">
                            <button type="button" class="btn btn-dark">Read More</button>
                        </a>
                    </div>
                </div>
            </section>
        @endforeach
            <div class="row">
                <div class="col-12">
                        {{ $tactics->links() }}
                </div>
            </div>
    </div>
@endsection
