<x-guest-layout>
    @include('website.navbar')
    <div class="block max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <header class="my-12 flex items-center justify-center py-12 md:py-24 px-12 rounded-lg pattern-squares">
            <h1 class="text-4xl md:text-6xl font-extrabold text-[#073260]">Training & Documentation</h1>
        </header>

        <main class="my-12 grid grid-cols-2 gap-8">
            <div class="col-span-2 md:col-span-1">
                {{-- Documents --}}
                <h2 class="text-3xl font-extrabold text-[#073260]">Documents</h2>
                @forelse ($documents as $document)
                    <a href="{{ asset($document->url) }}" target="_blank" @class([
                        'block group',
                        'mt-6' => $loop->first,
                        'mt-3' => !$loop->first
                    ])>
                        <div class="flex space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:text-[#01adeb]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m5.231 13.481L15 17.25m-4.5-15H5.625c-.621 0-1.125.504-1.125 1.125v16.5c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9zm3.75 11.625a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                            </svg>
                            <span class="group-hover:text-[#01adeb]">{{ $document->name }}</span>
                        </div>
                    </a>
                @empty

                @endforelse
            </div>
            <div class="col-span-2 md:col-span-1">
                {{-- External Resources --}}
                <h2 class="text-3xl font-extrabold text-[#073260]">External Resources</h2>
                @forelse ($urls as $url)
                    <a href="{{ asset($url->url) }}" target="_blank" @class([
                        'block group',
                        'mt-6' => $loop->first,
                        'mt-3' => !$loop->first
                    ])>
                        <div class="flex space-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 group-hover:text-[#01adeb]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                            </svg>
                            <span class="group-hover:text-[#01adeb]">{{ $url->name }}</span>
                        </div>
                    </a>
                @empty

                @endforelse
            </div>
        </main>
    </div>
    @include('website.footer')
</x-guest-layout>
