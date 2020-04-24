<div class="border-2 border-gray-300 rounded-lg mb-4">
    @foreach($tweets as $tweet)
        @include('_tweet')
    @endforeach
</div>