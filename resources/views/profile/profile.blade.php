@extends('app')

@section('content')

    <div id="content">
        <br><br>
            <b>
            </b> <a href="/editprofile" class="btn btn-info" role="button">Edit Profile!</a>
        <br><br>

        <br>

        <b>
            Username:
        </b><div class="text">{{ $username }}<br></div>

        <br>

        <b>
            Quote:
        </b><div class="text"> {{ $quote }}<br></div>

    </div>

@endsection

<style>
    #content{
        text-align: center;
        padding: 10px;
        margin: 10px;
    }
    .text{
        color: black;
    }
    b{
        color: black;
    }
</style>