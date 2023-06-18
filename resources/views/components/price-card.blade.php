<div class="w-64 p-4 bg-white shadow-lg rounded-2xl dark:bg-gray-800">
    <p class="mb-4 text-xl font-medium text-gray-800 dark:text-gray-50">
        {{ $priceCard->title }}
    </p>
    <p class="text-3xl font-bold text-gray-900 dark:text-white">
        {{ $priceCard->price }}₽
        <span class="text-sm text-gray-300">
            / месяц
        </span>
    </p>
    <p class="mt-4 text-xs text-gray-600 dark:text-gray-100">
        {{ $priceCard->description }}
    </p>
    <ul class="w-full mt-6 mb-6 text-sm text-gray-600 dark:text-gray-100">
        @foreach($priceCard->features as $feature)
            <li class="mb-3 flex items-center ">
                <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" width="6" height="6" stroke="currentColor"
                     fill="#10b981" viewBox="0 0 1792 1792">
                    <path
                        d="M1412 734q0-28-18-46l-91-90q-19-19-45-19t-45 19l-408 407-226-226q-19-19-45-19t-45 19l-91 90q-18 18-18 46 0 27 18 45l362 362q19 19 45 19 27 0 46-19l543-543q18-18 18-45zm252 162q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                    </path>
                </svg>
                {{ $feature }}
            </li>
        @endforeach
    </ul>
</div>
