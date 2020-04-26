<div class="border-2 border-blue-300 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/tweets">
        @csrf
        <textarea 
            name="body"
            class="w-full"
            placeholder="What's up doc?"
            required
            autofocus
        >
        </textarea>

        <hr class="py-4">

        <footer class="flex justify-between items-center">
            <img 
            src="{{ auth()->user()->avatar }}"; 
            alt="your avatar"
            class="rounded-full mr-2"
            width="50px"
            height="50px"
            >
            <button 
                type="submit" 
                class="bg-blue-500 hover:bg-blue-600 rounded-full shadow px-8 py-2 text-white"
            >
                Publish
            </button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-2">
            {{ $message }}
        </p>
    @enderror
</div>