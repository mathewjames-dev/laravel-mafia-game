@extends('app')

@section('content')

    <div class="group">
        {!! Form::open(['action' => 'CrimeController@crime']) !!}
            {!! Form::label('state', 'Steal from a child') !!}
            {!! Form::radio('radio', '1') !!}<br>
        <img src="http://mysticpolitics.com/wp-content/uploads/2012/06/study-people-who-believe-in-heaven-commit-more-crimes-e1340735406637.jpg"/>
        <br>
        @if ($crime1 <= \Carbon\Carbon::now())
            <b style="color:green;">Available</b>
        @else
            <b style="color:red;">Please Wait Before Attempting This Crime!</b>
        @endif

<br>
            {!! Form::label('state', 'Rob Pennas House') !!}
            {!! Form::radio('radio', '2') !!}<br>
        <img src="http://i.dailymail.co.uk/i/pix/2011/09/03/article-0-083E3B61000005DC-916_468x286.jpg"/>
        <br>
        @if ($crime2 <= \Carbon\Carbon::now())
            <b style="color:green;">Available</b>
        @else
            <b style="color:red;">Please Wait Before Attempting This Crime!</b>
        @endif
<br>
            {!! Form::label('state', 'Kidnap a member of Sezgi staff') !!}
            {!! Form::radio('radio', '3') !!}<br>
        <img src="http://www.baylor.edu/content/imglib/2/0/2/9/202905.jpg"/>
        <br>
        @if ($crime3 <= \Carbon\Carbon::now())
            <b style="color:green;">Available</b>
        @else
            <b style="color:red;">Please Wait Before Attempting This Crime!</b>
        @endif
<br>
            {!! Form::label('state', 'Rob a bank') !!}
            {!! Form::radio('radio', '4') !!}<br>
        <img src="http://images.huffingtonpost.com/2010-07-22-vadar1_20100722174359_640_480.JPG"/>
        <br>
        @if ($crime4 <= \Carbon\Carbon::now())
            <b style="color:green;">Available</b>
        @else
            <b style="color:red;">Please Wait Before Attempting This Crime!</b>
        @endif
<br>
            {!! Form::label('state', 'Kidnap Bill Gates for ransom') !!}
            {!! Form::radio('radio', '5') !!}<br>
        <img src="http://images.sodahead.com/polls/001658341/196393140_kidnap1_answer_2_xlarge.jpeg"/>
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