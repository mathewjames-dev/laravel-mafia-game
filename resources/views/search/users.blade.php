@extends('app')

@section('content')

    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading" style="text-align: center">Search Results</div>

            <div class="panel-body">
                @foreach ($users as $user)
                    <a href="{{ action('ProfileController@show', [$user->id]) }}"><li>{{ $user->name }}</li></a>
                @endforeach
            </div>
        </div>
    </div>

@stop