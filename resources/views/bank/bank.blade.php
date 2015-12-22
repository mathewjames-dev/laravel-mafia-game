@extends('app')

@section('content')

    <div class="col-md-12">
        <div class="col-md-3 col-md-offset-2">
            {!! Form::model($user, ['method' => 'POST', 'action' => ['BankController@store', $user_name]]) !!}
            <div class="group">
                {!! Form::label('money', 'Money:') !!}
                {!! Form::text('money', null, ['class' => 'form-control']) !!}
            </div>
            <br>
            {!! Form::submit('Deposit', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
        <div class="col-md-3" id="posts">
            <div class="panel panel-default">
                <div class="panel-heading">Your Bank</div>

                <div class="panel-body">
                    Money: {{ $bank->money }}
                    <br>
                </div>

                <div class="panel-heading">Richest Players (Exc Bank)</div>

                <div class="panel-body">
                    @foreach ($users as $user)
                        {{ $user->name }}:
                        {{ $user->money }}<br>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-3 col-md-offset-6" style="position:absolute;">
            {!! Form::open(['action' => 'BankController@withdraw']) !!}
            <div class="group">
                {!! Form::label('amount', 'Money:') !!}
                {!! Form::text('amount', null, ['class' => 'form-control']) !!}
            </div>
            <br>
            {!! Form::submit('Withdraw', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>

    </div>

@stop

<style>
    #posts{
        position: absolute;
        top: 150%;
    }
</style>
