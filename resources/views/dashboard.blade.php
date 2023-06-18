<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <table class="table p-4 bg-white rounded-lg shadow">
                <thead>
                <tr>
                    <th class="border p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                        #
                    </th>
                    <th class="border p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                        {{ __('From') }}
                    </th>
                    <th class="border p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                        {{ __('Phone') }}
                    </th>
                    <th class="border p-4 dark:border-dark-5 whitespace-nowrap font-normal text-gray-900">
                        {{ __('Date') }}
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($clients as $client)
                    <tr class="text-gray-700">
                        <td class="border p-4 dark:border-dark-5">
                            {{ $client->id }}
                        </td>
                        <td class="border p-4 dark:border-dark-5">
                            {{ $client->from }}
                        </td>
                        <td class="border p-4 dark:border-dark-5">
                            {{ $client->phone }}
                        </td>
                        <td class="border p-4 dark:border-dark-5">
                            {{ $client->created_at }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
</x-app-layout>
