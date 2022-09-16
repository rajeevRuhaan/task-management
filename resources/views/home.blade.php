@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <div class="card text-center"> 
                    <div class="card-body">
                      <h4 class="card-title">Task management System</h4>
                      <p class="card-text">Keep record of your tasks.</p>
                      <a  class="btn btn-primary" href="{{route('task.index')}}" role="button">Open App...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
