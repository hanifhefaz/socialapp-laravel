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
                <p class="text-sm bg-green-100 rounded-full p-2">
                   {{$post->body}}
                   </p>
                   <p class="text-xs text-blue-500 rounded-full mr-2">Posted {{$post->created_at->diffForHumans()}}</p>
                <br>

                @foreach($post->comments as $comment)
                <div class="mr-2 flex">
                <a href="{{route('profile', $post->user)}}">
                <img 
                src="{{ $post->user->avatar }}" 
                alt="" 
                class="rounded-full mr-2 text-center"
                width="50"
                height="50"></a>
                <p class="text-sm mb-4 bg-gray-200 mr-2 p-4"> {{$comment->body}}
                    </div>
            </p>
                @endforeach


                <form method="POST" action="{{route('comments', $post->id)}}"> 
                    @csrf
            <textarea
                name = "body"
                class="w-full border border-blue-400 rounded-lg p-2 mb-2"
                placeholder = "Your comment here" required>
            </textarea>
            <button type="submit" class="bg-blue-300 rounded-lg shadow py-1 px-4 text-white">Comment</button>
            </form>

            </div>


        </div>
        <hr class="my-4">