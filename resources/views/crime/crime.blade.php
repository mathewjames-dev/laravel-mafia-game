@extends('app')

@section('content')

    <div class="group">
        {!! Form::open(['action' => 'CrimeController@crime']) !!}
            {!! Form::label('state', 'Steal from a child') !!}
            {!! Form::radio('radio', '1') !!}<br>
        <br>
        @if ($crime1 <= \Carbon\Carbon::now())
            <b style="color:green;">Available</b>
        @else
            <b style="color:red;">Please Wait Before Attempting This Crime!</b>
        @endif

<br>
            {!! Form::label('state', 'Rob Pennas House') !!}
            {!! Form::radio('radio', '2') !!}<br>
        <br>
        @if ($crime2 <= \Carbon\Carbon::now())
            <b style="color:green;">Available</b>
        @else
            <b style="color:red;">Please Wait Before Attempting This Crime!</b>
        @endif
<br>
            {!! Form::label('state', 'Kidnap a member of Sezgi staff') !!}
            {!! Form::radio('radio', '3') !!}<br>
        <br>
        @if ($crime3 <= \Carbon\Carbon::now())
            <b style="color:green;">Available</b>
        @else
            <b style="color:red;">Please Wait Before Attempting This Crime!</b>
        @endif
<br>
            {!! Form::label('state', 'Rob a bank') !!}
            {!! Form::radio('radio', '4') !!}<br>
        <br>
        @if ($crime4 <= \Carbon\Carbon::now())
            <b style="color:green;">Available</b>
        @else
            <b style="color:red;">Please Wait Before Attempting This Crime!</b>
        @endif
<br>
            {!! Form::label('state', 'Kidnap Bill Gates for ransom') !!}
            {!! Form::radio('radio', '5') !!}<br>
        <br>
        @if ($crime5 <= \Carbon\Carbon::now())
            <b style="color:green;">Available</b>
        @else
            <b style="color:red;">Please Wait Before Attempting This Crime!</b>
        @endif
<br>
            {!! Form::submit('Commit Crime', ['class' => 'btn btn-primary form-control']) !!}
        {!! Form::close() !!}
        @include('errors.list')
    </div>
@stop

<style>
    .group{
        padding-left: 400px;
        padding-right: 400px;
    }
</style>