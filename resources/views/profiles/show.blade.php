@extends('layouts.app')

@section('content')

<header class="mb-6 relative">
	
	<img src="/images/profile-wall.jpg">
</header>

<div class="flex justify-between">
	<div>
		<h2 class="font-bold">{{$user->name}}</h2>
		<p class="text-sm"> Joined {{$user->created_at->diffForHumans()}}</p>
	</div>

	<div>

		<form method="POST" action="/profiles/{{$user->name}}/follow">
			@csrf
			@if (auth()->user()->is($user))
			<button type="submit" class="bg-blue-300 rounded-full shadow py-1 px-4 text-white">Edit</button>
			@endif
@if (auth()->user()->isNot($user))
			<button type="submit" class="bg-blue-300 rounded-full shadow py-1 px-4 text-white">
				{{auth()->user()->following($user) ? 'Unfollow' : 'Follow'}}
			</button>
			@endif
		</form>

	</div>

</div>

    <img 
    src="{{ $user->avatar }}" 
    alt="" 
    class="rounded-full mr-2 absolute"
    style="width: 150px; left:calc(50% - 75px); top: 35%"
    >

@include('_timeline',[
'posts'=> $user->posts])

@endsection