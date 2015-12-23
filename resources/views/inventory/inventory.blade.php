@extends('app')

@section('content')

    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading" style="text-align: center">Inventory</div>

            <div class="panel-body">
                Guns (Name, Power, Accuracy):<br>
                @foreach ($user->guns as $gun)
                    <li>{{ $gun->name }}, {{ $gun->power }}, {{ $gun->accuracy }}</li>
                @endforeach
                <br>
                Armor (Name, Defence, Value):<br>
                @foreach ($user->armors as $armor)
                    <li> {{ $armor->name }}, {{ $armor->defence }}, {{ $armor->value }}</li>
                @endforeach
            </div>
        </div>
    </div>

@stop