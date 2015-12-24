@extends('app')

@section('content')

    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading" style="text-align: center">Kill a user</div>

            <div class="panel-body">
                @if ($countguns >= 1)
                    (You have a chance at losing your weapon after you try to kill!)
                    @foreach ($guns as $gun)
                        {!! Form::open(['action' => 'KillController@killPlayer']) !!}
                        {!! Form::label('name', $gun->name) !!}
                        {!! Form::radio('radio', $gun->name) !!}<br>
                    @endforeach
                    {!!  Form::text('kill', null, array('placeholder'=>'Who do you want to kill?'))!!}<Br>
                    {!! Form::submit('Attempt To Kill Player', ['class' => 'btn btn-primary form-control']) !!}
                    {!! Form::close() !!}
                @else
                    You don't have any weapons!
                @endif
            </div>
        </div>
    </div>

@stop

<style>
    #search{
        position:absolute;
        left:45%;
    }
</style>