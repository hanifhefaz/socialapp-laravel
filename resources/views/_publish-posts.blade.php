        <div class="border border-blue-400 rounded-lg p-6 mb-4">
            <form method="POST" action="/posts"> 
            	@csrf

            <textarea
                name = "body"
                class="w-full"
                placeholder = "What is going on?" required>
            </textarea>

            <hr class="my-4">

            <footer class="flex justify-between">
                <img src="{{auth()->user()->avatar}}"
                 alt="" class="rounded-full mr-2"
                 width="50"
                 height="50">
            	<button type="submit" class="bg-blue-300 rounded-lg shadow py-1 px-4 text-white">Post</button>
            </footer>

            </form>

            @error('body')
            <p class="text-red-400 text-sm">{{$message}}
            @enderror


        </div>