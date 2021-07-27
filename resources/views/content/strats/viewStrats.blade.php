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
                <div class="card" id="stratBox">
                    <div class="header">
                        <div class="row">
                            <div class="col-md-3 col-lg-3 col-xl-3 d-none d-sm-block">
                                <p style="text-align: left">{{$tactic->map->map_name}}</p>

                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-6 col-12 col-sm-12">
                                <h5 style="text-align: center">{{$tactic->tactic_name}}</h5>
                            </div>
                            <div class="col-md-1 col-lg-2 col-xl-2 d-none d-md-block">
                                <a href="{{route('strats.like',['id' => $tactic->id])}}">
                                    <p style="text-align: right">&#128151</p>
                                </a>
                            </div>
                            <div class="col-md-1 col-lg-1 col-xl-1 d-none d-md-block">
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
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-12 col-lg-12 col-xl-12 text-left">
                                <a href="{{ route('strats.read',['id' => $tactic->id]) }}">
                                    <button type="button" class="btn btn-dark">Read More</button>
                                </a>
                            </div>
                                <div class="col-6 col-sm-6 d-md-none">
                                    <div class="d-flex flex-row-reverse bd-highlight mb-3">
                                        <div class="p-2 bd-highlight">
                                            <p style="text-align: center">{{count($tactic->likes)}}</p>

                                        </div>
                                        <div class="p-2 bd-highlight">
                                            <a href="{{route('strats.like',['id' => $tactic->id])}}">
                                                <p style="text-align: right">&#128151</p>
                                            </a>
                                        </div>

                                    </div>

                            </div>
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
