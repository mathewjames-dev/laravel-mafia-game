@extends('app')

@section('content')

    <div class="col-md-12">
        <div class="col-md-3">
            <div class="group">
                {!! Form::open(['action' => 'AdminController@createRole']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Role Name:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('display_name', 'Display Name:') !!}
                    {!! Form::text('display_name', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('description', 'Role Description:') !!}
                    {!! Form::text('description', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Create Role', ['class' => 'btn btn-primary form-control']) !!}
                </div>
                {!! Form::close() !!}
                @include('errors.list')
            </div>
        </div>
        <div class="col-md-3">
            <div class="group">
                {!! Form::open(['action' => 'AdminController@editUser']) !!}
                <div class="form-group">
                    {!! Form::label('username', 'Username:') !!}
                    {!! Form::text('username', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('name', 'Role Name:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Update User', ['class' => 'btn btn-primary form-control']) !!}
                </div>
                {!! Form::close() !!}
                @include('errors.list')
            </div>
        </div>
        <div class="col-md-3">
            <div class="group">
                {!! Form::open(['action' => 'AdminController@setState']) !!}
                <div class="form-group">
                    {!! Form::label('username', 'Username:') !!}
                    {!! Form::text('username', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('state', 'Site State:') !!}
                    {!! Form::text('state', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Update User', ['class' => 'btn btn-primary form-control']) !!}
                </div>
                {!! Form::close() !!}
                @include('errors.list')
            </div>
        </div>
    </div>

@endsection