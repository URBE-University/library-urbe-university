<x-guest-layout>
    @include('website.navbar')
        <div class="block max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <header class="my-12 flex items-center justify-center py-24 rounded-lg pattern-squares">
                <h1 class="text-4xl md:text-6xl font-extrabold text-[#073260]">Newsletters</h1>
            </header>

            <main class="my-12 grid grid-cols-4 gap-8">
                @forelse ($newsletters as $document)
                <a href="{{ $document->url }}" class="col-span-2 lg:col-span-1 text-center group" target="_blank">
                    <div class="rounded-lg h-72 md:h-80 overflow-hidden shadow">
                        <img src="{{ asset($document->thumbnail) }}" alt="{{ $document->name }}" class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <h3 class="mt-2 text-sm text-gray-700">{{ $document->name }}</h3>
                </a>
                @empty
                @endforelse

                <div class="mt-8 col-span-4">
                    {{ $newsletters->links() }}
                </div>
            </main>
        </div>
    @include('website.footer')
</x-guest-layout>
