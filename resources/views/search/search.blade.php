@extends('app')

@section('content')

    <div id="search">
        {!!  Form::open(array('url'=>'/search'))!!}
        {!!  Form::text('keyword', null, array('placeholder'=>'Search a name'))!!}
        {!!  Form::submit('search') !!}
        {!!  Form::close() !!}
    </div>

@stop
<style>
    #search{
        position:absolute;
        left:45%;
    }
</style>