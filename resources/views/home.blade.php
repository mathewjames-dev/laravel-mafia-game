@extends('app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading" style="text-align: center">Recent Online Users</div>

				<div class="panel-body">
					@foreach ($onlineUsers as $user)
						<li>{{ $user->name }}</li>
						{{ $user->updated_at->diffForHumans() }}
					@endforeach
				</div>
			</div>
		</div>

		<div class="col-md-3 posts">
			<div class="panel panel-default">
				<div class="panel-heading">Main Game</div>

				<div class="panel-body">
					<a href="/search">Search a player</a>
					<br>
					<a href="/crime">Commit a Crime</a>
					<br>
					<a href="/inventory">Inventory</a>
					<br>
					<a href="/bank">Bank</a>
					<br>
					<a href="/shop">Shop</a>
					<br>
					<a href="/travel">Travel</a>
					<br>
					<a href="/kill">Kill</a>
				</div>

				<div class="panel-heading">Social</div>

				<div class="panel-body">
					Some links go here
				</div>
			</div>
		</div>

		<div class="col-md-3 information">
			<div class="panel panel-default">
				<div class="panel-heading">Player Information</div>

				<div class="panel-body">
					Username: {{ $name }}<br>
					Money: {{ $money }}<br>
					Experience: {{ $exp }}<br>
					Rank: {{ $rank }}<br>
					Health: {{ $health }}<br>
					Points: {{ $points }}<br>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

<style>
	.posts{
		position:absolute;
		left:-17%;
	}
	.information{
		left:67%;
	}
</style>