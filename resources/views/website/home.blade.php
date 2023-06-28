<x-guest-layout>
    @include('website.navbar')
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <header class="my-12 md:my-24 grid grid-cols-2 gap-8 items-center">
            <div class="col-span-2 md:col-span-1 text-center md:text-left">
                <h4 class="text-xl font-light text-[#073260]">URBE University Library</h4>
                <h1 class="text-4xl md:text-6xl font-extrabold text-[#073260]">Books & Learning Resources</h1>
                <p></p>
                <form action="http://koha.library.urbe.university/cgi-bin/koha/opac-search.pl" method="get" target="_blank">
                    <div class="mt-8">
                        <input type="search" placeholder="Search the library catalog" name="q" class="border-gray-300 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1">
                        <button type="submit" class="bg-[#01adeb] hover:bg-[#01adeb]/90 text-white rounded-md px-3 py-2 shadow-sm">Search</button>
                    </div>
                </form>
            </div>
            <div class="col-span-2 md:col-span-1">
                <img src="{{ asset('element5-digital-jCIMcOpFHig-unsplash.webp') }}" alt="Person holding books" class="w-full aspect-video md:aspect-square object-cover object-center rounded-xl shadow-xl">
            </div>
        </header>

        <main>
            <section class="my-12 md:my-24">
                <h3 class="text-3xl font-extrabold text-[#073260]">What we offer</h3>
                <div class="mt-8 grid grid-cols-4 gap-8">
                    <div class="col-span-4 md:col-span-2 lg:col-span-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-[#01adeb]/60">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                        <h5 class="text-lg font-bold text-[#073260]">Public databases</h5>
                        <p class="text-base text-slate-600">Navigate and search for information using the Open Access databases available to the general public at URBE University</p>
                    </div>
                    <div class="col-span-4 md:col-span-2 lg:col-span-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-[#01adeb]/60">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                        <h5 class="text-lg font-bold text-[#073260]">University resources catalog</h5>
                        <p class="text-base text-slate-600">Search through our learning resources catalog, and find books and other materials needed for your courses.</p>
                    </div>
                    <div class="col-span-4 md:col-span-2 lg:col-span-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-[#01adeb]/60">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                        <h5 class="text-lg font-bold text-[#073260]">Private databases</h5>
                        <p class="text-base text-slate-600">Databases of closed access only available to our students and faculty for academic development purposes.</p>
                    </div>
                    <div class="col-span-4 md:col-span-2 lg:col-span-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-[#01adeb]/60">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                        <h5 class="text-lg font-bold text-[#073260]">Academic repository</h5>
                        <p class="text-base text-slate-600">Databases only available to the URBE University community, showcasing an ample catalog of works published by and for our students, faculty and qualified staff members.</p>
                    </div>
                </div>
            </section>

            <section class="my-12 md:my-24">
                <h3 class="text-3xl font-extrabold text-[#073260]">Grab a copy of our newsletter</h3>

                <div class="mt-8 grid grid-cols-4 gap-8">
                    @forelse ($newsletters as $document)
                        <a href="{{ $document->url }}" class="col-span-2 lg:col-span-1 text-center group" target="_blank">
                            <div class="rounded-lg h-72 md:h-80 overflow-hidden shadow">
                                <img src="{{ asset($document->thumbnail) }}" alt="{{ $document->name }}" class="h-full w-full object-cover object-center group-hover:opacity-75">
                            </div>
                            <h3 class="mt-2 text-sm text-gray-700">{{ $document->name }}</h3>
                        </a>
                    @empty
                    @endforelse
                </div>
                <div class="mt-8 text-center">
                    <a href="{{ route('newsletters') }}" class="text-slate-600 hover:text-[#01adeb] transition-all">View all issues</a>
                </div>
            </section>
        </main>

    </div>

    <script>
        import {createClient} from 'pexels';
        const client = createClient('HVdqV1NKXv5hUXDh31yss6IXx5tZGeVtnhOOSDr1na4DgdboaFkq6kqw'); // This api key belongs to Elvis Blanco (eblanco@urbe.university)

    </script>
    @include('website.footer')
</x-guest-layout>
