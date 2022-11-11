<x-app-layout>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>

            <x-jet-dropdown>
                <x-slot name="trigger">
                    <button class="px-4 py-1 border rounded-full">Create</button>
                </x-slot>

                <x-slot name="content">
                    <x-jet-dropdown-link :href="route('document.create')">Document</x-jet-dropdown-link>
                    <x-jet-dropdown-link :href="route('newsletter.create')">Newsletter</x-jet-dropdown-link>
                    <x-jet-dropdown-link :href="route('url.create')">External Resource</x-jet-dropdown-link>
                </x-slot>
            </x-jet-dropdown>
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Name
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Url
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Type
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse (\App\Models\Newsletter::get() as $newsletter)
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $newsletter->name }}
                                </th>
                                <td class="py-4 px-6 text-xs">
                                    <a href="{{ asset($newsletter->url) }}" target="_blank">{{ asset($newsletter->url) }}</a>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="text-xs font-bold tracking-wider px-3 py-0.5 bg-yellow-100 border border-yellow-300 text-yellow-600 rounded-full">NEWSLETTER</span>
                                </td>
                                <td class="py-4 px-6 text-right">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                        @empty
                        @endforelse

                        @forelse (\App\Models\Document::get() as $document)
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $document->name }}
                                </th>
                                <td class="py-4 px-6 text-xs">
                                    <a href="{{ asset($document->url) }}" target="_blank">{{ asset($document->url) }}</a>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="text-xs font-bold tracking-wider px-3 py-0.5 bg-green-100 border border-green-300 text-green-600 rounded-full">DOCUMENT</span>
                                </td>
                                <td class="py-4 px-6 text-right">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                        @empty
                        @endforelse

                        @forelse (\App\Models\Url::get() as $url)
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $url->name }}
                                </th>
                                <td class="py-4 px-6 text-xs">
                                    <a href="{{ asset($url->url) }}" target="_blank">{{ asset($url->url) }}</a>
                                </td>
                                <td class="py-4 px-6">
                                    <span class="text-xs font-bold tracking-wider px-3 py-0.5 bg-blue-100 border border-blue-300 text-blue-600 rounded-full">URL</span>
                                </td>
                                <td class="py-4 px-6 text-right">
                                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
