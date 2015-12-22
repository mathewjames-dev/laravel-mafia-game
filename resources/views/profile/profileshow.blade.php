@extends ('app')

@section('content')

    <div id="content">
        <div class="col-md-12 col-sm-12">
            <h1 class="header">{{$user->name}}'s Profile!</h1>
            @foreach ($roles as $role)
                <img src="{{$role->display_name}}"/>
            @endforeach
            <br><br>
            <b>
            </b>

            <hr/>
            <br>

            <b>
                Username:
            </b> <div class="text">{{$user->name}}</div>
            <br>

            <b>
                Rank:
            </b> <div class="text">{{$user->rank}}</div>
            <br>

            <b>
                Quote:
            </b> <div class="text">{{$user->quote}}</div>
        </div>
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
    .header{
        color: black;
    }
    b{
        color: black;
    }
</style>