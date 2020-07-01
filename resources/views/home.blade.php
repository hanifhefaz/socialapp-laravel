@extends('layouts.app')

@section('content')
<div class="lg:flex justify-between">
    <div class="w-1/6">
        @include ('_sidebar-links')
    </div>



    <div class="lg:flex-1 lg:mx-10">
        @include ('_publish-posts')

    <div class="border border-gray-300 rounded-lg">
        @foreach($posts as $post)

        @include('_post')
        @endforeach

    </div>
</div>

    <div class="w-1/6">
        @include('_friends-list')
    </div>
</div>

@endsection
