@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Forum Threads</div>
                  
                      @foreach($threads as $threads)
                <div class="panel-body">
                    
                      <h3>{{ $threads->title}}</h3>
                      <P>
                         {{ $threads->context}}
                      </P>
                      </div>
                      
                      <div class="panel panel-default">
                      </div>

                      @endforeach
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
