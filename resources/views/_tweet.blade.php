<div class="flex p-4 border-b-2 border-b-grey-400">
    <div class="mr-2">
        <a href="{{ route('profile', $tweet->user) }}">
            <img 
            src="{{ $tweet->user->avatar }}"  
            alt=""
            class="rounded-full mr-2"
            width="50px"
            height="50px"
            >
        </a>
    </div>
    <div>
        <h5 class="font-bold mb-4">
           <a href="{{ route('profile', $tweet->user) }}">
                {{ $tweet->user->name }}
           </a> 
        </h5>

        <p class="text-sm">
            {{ $tweet->body }}
        </p>
    </div>
</div>