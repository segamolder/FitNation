<header class="z-30 flex items-center w-full h-24 sm:h-32">
    <div class="container flex items-center justify-between px-6 mx-auto">
        <a href="{{ route('welcome') }}" class="text-3xl font-black text-gray-800 uppercase dark:text-white">
            {{ config('app.name', 'Laravel') }}
        </a>
        <div class="flex items-center">
            <nav class="items-center hidden text-lg text-gray-800 uppercase font-sen dark:text-white lg:flex">
                <a href="{{ route('group-training') }}" class="flex px-6 py-2">
                    {{ __('Group training') }}
                </a>
                <a href="{{ route('personal-training') }}" class="flex px-6 py-2">
                    {{ __('Personal training') }}
                </a>
                <a href="{{ route('cardio-zone') }}" class="flex px-6 py-2">
                    {{ __('Cardio zone') }}
                </a>
            </nav>
            <button class="flex flex-col ml-4 lg:hidden">
                    <span class="w-6 h-1 mb-1 bg-gray-800 dark:bg-white">
                    </span>
                <span class="w-6 h-1 mb-1 bg-gray-800 dark:bg-white">
                    </span>
                <span class="w-6 h-1 mb-1 bg-gray-800 dark:bg-white">
                    </span>
            </button>
        </div>
    </div>
</header>
