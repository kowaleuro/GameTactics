@extends("layouts.master")

@section('content')
    <div class="container">
        @foreach($tactics as $tactic)
            <section>
                <div class="card">
                    <div class="header">
                        <h5 style="text-align: center">{{$tactic->tactic_name}}</h5>
                    </div>
                    <div class="card-body">
                        {!! $tactic->tactic_content !!}


                    </div>
                    <div class="footer">
                        <a href="{{ route('strats.read',['id' => $tactic->id]) }}">
                            <button type="button" class="btn btn-dark">Read More</button>
                        </a>
                    </div>
                </div>
            </section>
        @endforeach
    </div>
@endsection
