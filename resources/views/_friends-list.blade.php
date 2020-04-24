<h3 class="font-bold text-xl mb-4">Following</h3>

<ul>
    @forelse (auth()->user()->follows as $user)
        <li class=mb-4>
            <div>
                <a href="{{ route('profile', $user) }}" class="flex items-center text-sm">
                <img 
                    src="{{ $user->avatar }}" 
                    alt=""
                    class="rounded-full mr-2"
                    width="40px"
                    height="40px"
                >
                {{ $user->name }}
                </a>
                
            </div>
        </li>
    @empty
        <li>No friends yet!</li>
    @endforelse
</ul>



