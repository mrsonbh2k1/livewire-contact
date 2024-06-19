
<div class="max-w-lg mx-auto mt-8 bg-white shadow-2x1 rounded-lg overflow-hidden">
    <div class="px-6 py-4">
        @if (session()->has('success'))
        <div class="bg-green-200 text-green-800 px-4 py-2 rounded-lg">
            {{session('success')}}

        </div>
        @endif
        @if (session()->has('error'))
        <div class="bg-red-800 text-white px-4 py-2 rounded-lg">
            {{session('error')}}

        </div>
        @endif
        <h1 class="flex justify-center text-3x1 font-bold mb-2 text-gray-800">
            ContactForm
        </h1>
        <p class="text-gray-600 mb-2">Please fill out the form</p>
        <form wire:submit="send" method="post">
            <div class="mb-4">
                <label for="name" class="block text-sm font-semibold text-gray-700 mb-1">Name</label>
                <input type="text" id="name" wire:model="name" class="w-full px-4 py-3 rounded-lg border focus:outline-none">
                @error('name')
                <span class="text-red-500 text-sm">{{$message}}</span>

                @enderror

            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">Email</label>
                <input type="email" id="email" wire:model="email" class="w-full px-4 py-3 rounded-lg border focus:outline-none">
                @error('email')
                <span class="text-red-500 text-sm">{{$message}}</span>

                @enderror

            </div>
            <div class="mb-4">
                <label for="message" class="block text-sm font-semibold text-gray-700 mb-1">Message</label>
                <input type="message" id="message" wire:model="message" class="w-full px-4 py-3 rounded-lg border focus:outline-none">
                @error('message')
                <span class="text-red-500 text-sm">{{$message}}</span>

                @enderror

            </div>
            <div>
                <button type="submit" class="bg-indigo-500 text-white font-semibold px-6 py-3 rounded-lg focus:outline-none">Submit</button>
            </div>
        </form>
    </div>
</div>
