@extends('layouts.app')

@section('content')    
   <header class="mb-6 relative">
      <img 
         src="/images/default-profile-banner.jpg" 
         alt=""
         class="mb-1"
      >
      <div class="flex justify-between items-center mb-4">
         <div>
            <h2 class="font-bold text-2xl">{{ $user->name }}</h2>
            <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
         </div>

         <div>
            <a href="" class="rounded-full border border-gray-300 py-2 px-2 text-black text-xs mr-2">Edit Profile</a>
            <a href="" class="bg-blue-500 rounded-full shadow py-2 px-2 text-white text-xs">Follow Me</a>
         </div>
      </div>

      <img 
         src="{{ auth()->user()->avatar }}"; 
         alt="your avatar"
         class="rounded-full mr-2 absolute"
         style="width:160px; left:calc(50% - 75px); top:138px;"
      >

      <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non voluptas quaerat aliquam dolorum eos, aut sint, placeat expedita eius facere odit tempore asperiores itaque nesciunt et assumenda laudantium quae distinctio.</p>
   </header>

   <hr>

   @include('_timeline', [
      'tweets' => $user->tweets
   ])

@endsection