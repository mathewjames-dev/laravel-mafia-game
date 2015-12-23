@extends('app')

@section('content')
    @include('errors.list')
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading" style="text-align: center">Shop</div>

            <div class="panel-body">
                Guns (Name, Power, Accuracy, Price):<br>
                @foreach ($guns as $gun)
                    <li>{!! Form::open(['action' => 'ShopController@purchaseWeapon']) !!}
                        {!! Form::label('state', $gun->name) !!}
                        {!! Form::radio('radio', $gun->name) !!}, {{ $gun->power }}, {{ $gun->accuracy }}, {{ $gun->price }}<br>
                        <br></li></li>
                @endforeach
                {!! Form::submit('Purchase Weapon', ['class' => 'btn btn-primary form-control']) !!}
                {!! Form::close() !!}
                <br>
                <br>
                Armor (Name, Defence, Price):<br>
                @foreach ($armors as $armor)
                    <li> {!! Form::open(['action' => 'ShopController@purchaseArmor']) !!}
                        {!! Form::label('state', $armor->name) !!}
                        {!! Form::radio('radio', $armor->name) !!}, {{ $armor->defence }},  {{ $armor->price }}</li><br>
                @endforeach
                {!! Form::submit('Purchase Armor', ['class' => 'btn btn-primary form-control']) !!}
                {!! Form::close() !!}
                <br>
                <br>
                Car (Name, Armor, Speed, Price):<br>
                @foreach ($cars as $car)
                    <li> {!! Form::open(['action' => 'ShopController@purchaseCar']) !!}
                        {!! Form::label('state', $car->name) !!}
                        {!! Form::radio('radio', $car->name) !!}, {{ $car->armor }}, {{ $car->speed }},  {{ $car->price }}</li><br>
                @endforeach
                {!! Form::submit('Purchase Car', ['class' => 'btn btn-primary form-control']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@stop