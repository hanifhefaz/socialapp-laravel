@extends('layouts.app')

@section('content')


<h3 class="font-bold text-xl"> All Users</h3>
	
<div class="border border-blue-300 rounded-lg p-2 grid gap-4 grid-cols-3">
	@foreach ($users as $user)
	 <div class="inline-block text-white text-center bg-blue-400 px-2 py-2 m-2">
		
			<a href="{{route('profile', $user)}}" class="flex items-center">
			<img src="{{$user->avatar}}" 
			class="rounded-full mr-2"
			width="40"
			height="40">
			{{$user->name}}
		</a>
	
</div>
@endforeach
	</div>
	

@endsection