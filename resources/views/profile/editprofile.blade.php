@extends('app')

@section('content')
    <div id="content">
    {!! Form::model($user, ['method' => 'PATCH', 'action' => ['ProfileController@update', $user_id]]) !!}
    <div class="group">
        {!! Form::label('quote', 'Quote:') !!}
        {!! Form::text('quote', null, ['class' => 'form-control']) !!}
    </div>
<br>
    {!! Form::submit('Update Quote', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
    </div>
    @include('errors.list')
@endsection

<style>
    #content{
        text-align: center;
        padding: 10px;
        margin: 10px;
    }
    .group{
        margin-right: 20%;
        margin-left: 20%;
        font-family: Tahoma, Geneva, sans-serif;
        font-size: 14px;
        font-style: italic;
        line-height: 24px;
        font-weight: bold;
        color: black;
    }

</style>