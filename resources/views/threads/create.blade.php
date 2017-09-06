@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create a New Thread</div>

                <div class="panel-body">
                        <H3>
                            Title:
                        </H3>
                            <div class="form-group">
                              
                              <input type="text" class="form-control" aria-label="...">
                            </div>
                        <H3>
                            Body:
                        </H3>
                        <div class="form-group">
                          <textarea rows="6" class="form-control" aria-label="..."></textarea>
                          </div>
                          <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
