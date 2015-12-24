@extends('app')

@section('content')

    <div id="search">
        @if ($countguns >= 1)
            (You will lose your weapon after attempting a kill!)
            @foreach ($guns as $gun)
                {!! Form::open(['action' => 'KillController@killPlayer']) !!}
                {!! Form::label('name', $gun->name) !!}
                {!! Form::radio('radio', $gun->name) !!}<br>
            @endforeach
            {!!  Form::text('kill', null, array('placeholder'=>'Who do you want to kill?'))!!}<Br>
            {!! Form::submit('Kill player', ['class' => 'btn btn-primary form-control']) !!}
            {!! Form::close() !!}
        @else
            You don't have any weapons!
        @endif

    </div>

@stop

<style>
    #search{
        position:absolute;
        left:45%;
    }
</style>