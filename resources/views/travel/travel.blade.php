@extends('app')

@section('content')

    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading" style="text-align: center">Travel</div>

            <div class="panel-body">
                Locations (Location, Price):<br>
                @foreach ($locations as $location)
                    <li>
                        {!! Form::open(['action' => 'TravelController@travel']) !!}
                        {!! Form::label('state', $location->location) !!}
                        {!! Form::radio('radio', $location->location) !!}, {{ $location->price }}
                    </li>
                @endforeach
                <br>
                {!! Form::submit('Travel', ['class' => 'btn btn-primary form-control']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@stop