<x-app>   
   <header class="mb-6 relative">
      <div class="relative">
         <img 
            src="/images/default-profile-banner.jpg" 
            alt=""
            class="mb-1"
         >

         <img 
            src="{{ $user->avatar }}"; 
            alt="your avatar"
            class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
            width="160"
            style="left:50%;"
         >
      </div>

      <div class="flex justify-between items-center mb-6">
         <div>
            <h2 class="font-bold text-2xl">{{ $user->name }}</h2>
            <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
         </div>

         <div class="flex">
            <a href="" class="rounded-full border border-gray-300 py-2 px-2 text-black text-xs mr-2">Edit Profile</a>
            
            <x-follow-button :user="$user"></x-follow-button>

         </div>
      </div>

      <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non voluptas quaerat aliquam dolorum eos, aut sint, placeat expedita eius facere odit tempore asperiores itaque nesciunt et assumenda laudantium quae distinctio.</p>
   </header>

   <hr>

   @include('_timeline', [
      'tweets' => $user->tweets
   ])
</x-app> 