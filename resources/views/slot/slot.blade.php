@extends('app')

@section('content')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center">Welcome to the {{$slot->location}} Slots! Owned by: {{ $slot->owner }}</div>

                <div class="panel-body">
                    The more you wager the bigger the return!
                    <br>
                    {!! Form::open(['action' => 'SlotsController@slots']) !!}
                    <div class="group">
                        {!! Form::label('wager', 'Wager:') !!}
                        {!! Form::text('wager', null, ['class' => 'form-control']) !!}
                    </div>
                    <br>
                    {!! Form::submit('Gamble', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    </div>

@stop