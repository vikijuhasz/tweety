<div class="flex p-4 border-b-2 border-b-grey-400">
    <div class="mr-2">
        <img 
        src="{{ $tweet->user->avatar }}"  
        alt=""
        class="rounded-full mr-2"
        style="width:50px;height:50px;"
        >
    </div>
    <div>
        <h5 class="font-bold mb-4">{{ $tweet->user->name }}</h5>

        <p class="text-sm">
            {{ $tweet->body }}
        </p>
    </div>
</div>