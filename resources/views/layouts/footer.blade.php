<footer class="bg-gray-800 dark:bg-gray-100 w-full py-8">
    <div class="max-w-screen-xl px-4 mx-auto">
        <ul class="flex flex-wrap justify-between max-w-screen-md mx-auto text-lg font-light">
            <li class="my-2">
                <a class="text-gray-400 hover:text-gray-800 dark:text-gray-600 dark:hover:text-white transition-colors duration-200" href="{{ route('contacts') }}">
                    {{ __('Contacts') }}
                </a>
            </li>
            <li class="my-2">
                <a class="text-gray-400 hover:text-gray-800 dark:text-gray-600 dark:hover:text-white transition-colors duration-200" href="{{ route('about') }}">
                    {{ __('About Us') }}
                </a>
            </li>
        </ul>
    </div>
</footer>
