<x-guest-layout>
    <section class="relative h-screen overflow-hidden font-mono bg-white dark:bg-gray-800">
        <div class="relative z-20 flex items-center">
            <div class="container relative flex flex-col items-center justify-between px-6 py-4 mx-auto">
                <div class="flex flex-col">
                    <img src="{{ asset('images/logo.png') }}" class="mx-auto rounded-full w-28"/>
                    <p class="my-6 text-3xl text-center dark:text-white">
                        {{ $page->title }}
                    </p>
                    <h2 class="max-w-3xl py-2 mx-auto text-5xl font-bold text-center text-gray-800 md:text-6xl dark:text-white">
                        {{ $page->description }}
                    </h2>
                    <div class="flex items-center justify-center mt-4">
                        <div class="flex mt-8">
                            <div class="mr-4 text-white uppercase bg-pink-500 border-1 rounded-lg text-md">
                                <input type="text" id="rounded-email"
                                       class="rounded-lg flex-1 appearance-none w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                       placeholder="+7(999)999-99-99"/>
                            </div>
                            <a href="#"
                               class="px-4 py-2 text-pink-500 uppercase bg-transparent border-2 border-pink-500 rounded-lg dark:text-white hover:bg-pink-500 hover:text-white text-md">
                                {{ __('Call me back') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="p-6 px-6 mx-auto bg-gray-100 dark:bg-gray-800">
        <div class="mb-16 text-center">
            <h2 class="text-base font-semibold tracking-wide text-indigo-600 uppercase">
                {{ __('Features') }}
            </h2>
            <p class="mt-2 text-3xl font-extrabold leading-8 tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                {{ __('A better way to live') }}
            </p>
        </div>
        <div class="flex flex-wrap my-12 dark:text-white">
            @foreach($page->features as $title => $description)
                <x-feature-card
                    :title="$title"
                    :description="$description"
                />
            @endforeach
        </div>
    </section>

    <section class="flex-wrap items-center justify-center gap-8 text-center sm:flex py-6">
        @foreach($page->priceCards as $priceCard)
            <x-price-card
                :priceCard="$priceCard"
            />
        @endforeach
    </section>

</x-guest-layout>
