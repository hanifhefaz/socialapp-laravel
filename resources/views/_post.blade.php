        <div class="flex p-4">
            <div class="mr-2 flex-shrink-0">
                <a href="{{route('profile', $post->user)}}">
                <img 
                src="{{ $post->user->avatar }}" 
                alt="" 
                class="rounded-full mr-2"
                width="50"
                height="50"></a>
            </div>

            <div>
                <a href="{{route('profile', $post->user)}}">
                <h5 class="font-bold mb-4"> {{$post->user->name}} </h5>
            </a>
                <p class="text-sm">
                   {{$post->body}}
                </p>
            </div>
        </div>