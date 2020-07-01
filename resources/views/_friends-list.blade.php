<h3 class="font-bold text-xl"> Followings </h3>
<ul>
	@foreach (auth()->user()->follows as $user)
	<li class="mb-4">
		<div>
			<a href="{{route('profile', $user)}}" class="flex items-center">
			<img src="{{$user->avatar}}" 
			class="rounded-full mr-2"
			width="40"
			height="40">
			{{$user->name}}
		</a>
		</div>

	</li>
	@endforeach
</ul>
