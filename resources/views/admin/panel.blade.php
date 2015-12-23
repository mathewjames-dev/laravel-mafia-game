@extends('app')

@section('content')
    @include('errors.list')
    <div class="col-md-12">
        <div class="col-md-3">
            <div class="group">
                {!! Form::open(['action' => 'AdminController@makeCar']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Car Name:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('description', 'Description:') !!}
                    {!! Form::text('description', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('image', 'Image:') !!}
                    {!! Form::text('image', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('armor', 'Armor:') !!}
                    {!! Form::text('armor', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('speed', 'Speed:') !!}
                    {!! Form::text('speed', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('value', 'Value:') !!}
                    {!! Form::text('value', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('price', 'Price:') !!}
                    {!! Form::text('price', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Make Car', ['class' => 'btn btn-primary form-control']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        <div class="col-md-3">
            <div class="group">
                {!! Form::open(['action' => 'AdminController@makeGun']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Gun Name:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('desc', 'Description:') !!}
                    {!! Form::text('desc', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('image', 'Image:') !!}
                    {!! Form::text('image', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('power', 'Power:') !!}
                    {!! Form::text('power', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('accuracy', 'Accuracy:') !!}
                    {!! Form::text('accuracy', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('price', 'Price:') !!}
                    {!! Form::text('price', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Make Gun', ['class' => 'btn btn-primary form-control']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        <div class="col-md-3">
            <div class="group">
                {!! Form::open(['action' => 'AdminController@makeArmor']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Armor Name:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('description', 'Description:') !!}
                    {!! Form::text('description', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('image', 'Image:') !!}
                    {!! Form::text('image', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('defence', 'Defence:') !!}
                    {!! Form::text('defence', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('value', 'Value:') !!}
                    {!! Form::text('value', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('price', 'Price:') !!}
                    {!! Form::text('price', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Make Armor', ['class' => 'btn btn-primary form-control']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
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
            </div>
        </div>


        <div class="col-md-12">

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
                        {!! Form::label('state', 'Site State (1 = Banned, 2 = Killed):') !!}
                        {!! Form::text('state', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Update User', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="group">
                    {!! Form::open(['action' => 'AdminController@makeLocation']) !!}
                    <div class="form-group">
                        {!! Form::label('location', 'Location:') !!}
                        {!! Form::text('location', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('price', 'Price:') !!}
                        {!! Form::text('price', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Create Location', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection