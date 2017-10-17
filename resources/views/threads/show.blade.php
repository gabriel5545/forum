@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                
                <div class="panel-heading">{{ $thread -> title }}</div>

                <div class="panel-body">
                    {{ $thread -> context }}
                </div>
            </div>
            <br/>
            <form method="POST" action="/threads/{{ $thread -> id }}">
            {{ csrf_field() }}
            <textarea type="text" name="komment" class="form-control" rows="3"></textarea>
            <br/>
                <button class="btn btn-primary">Replay</button></form>
        </div>
    </div>
</div>
@endsection