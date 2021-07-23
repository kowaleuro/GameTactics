@extends("layouts.master")

@section('content')
    <div class="container">
        <div class="header">
            <h5 style="text-align: center">{{$tactic->tactic_name}}</h5>
        </div>
        <div class="card-body">
            {!! $tactic->tactic_content !!}
        </div>
    </div>
@endsection
