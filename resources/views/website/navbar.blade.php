<div class="w-full bg-white border-b border-gray-100">
    <div class="max-w-6xl mx-auto py-4 px-4 sm:px:6 lg:px-8">
        <div class="flex items-center justify-between">
            <div class="">
                <a href="/">
                    <img src="{{ asset('urbe-library.png') }}" alt="URBE University" class="w-44">
                </a>
            </div>
            <div class="hidden md:flex items-center">
                <a target="_blank" href="http://koha.urbeuniversity.edu/" class="px-3 py-2 rounded-md text-sm leading-4 font-medium hover:bg-gray-50 hover:text-gray-700">Catalog</a>
                <a target="_blank" href="https://omeka.urbeuniversity.edu" class="px-3 py-2 rounded-md text-sm leading-4 font-medium hover:bg-gray-50 hover:text-gray-700">Repository</a>
                <a href="{{ route('databases') }}" class="px-3 py-2 rounded-md text-sm leading-4 font-medium hover:bg-gray-50 hover:text-gray-700">Databases</a>
                <a href="{{ route('docs') }}" class="px-3 py-2 rounded-md text-sm leading-4 font-medium hover:bg-gray-50 hover:text-gray-700">Training &amp; Docs</a>
                <a href="{{ route('newsletters') }}" class="px-3 py-2 rounded-md text-sm leading-4 font-medium hover:bg-gray-50 hover:text-gray-700">News</a>
                <a href="https://outlook.office365.com/owa/calendar/LibraryInstructionBooking@urbe.university/bookings/" target="_blank" class="px-3 py-2 rounded-md text-sm leading-4 font-medium hover:bg-gray-50 hover:text-gray-700">Request Assistance</a>
            </div>

            <div class="md:hidden">
                <div class="relative" x-data="{ open: false }" @click.away="open = false" @close.stop="open = false">
                    <div @click="open = ! open">
                        <span class="inline-flex rounded-md">
                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                </svg>
                            </button>
                        </span>
                    </div>
                    <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute z-50 mt-2 60 rounded-md shadow-lg origin-top-right right-0" @click="open = false" style="display: none;">
                        <div class="rounded-md ring-1 ring-black ring-opacity-5 py-1 bg-white">
                            <div class=" w-60">
                                <a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition" href="http://catalog.urbe.university/">Library Catalog</a>
                                <a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition" href="https://omeka.urbeuniversity.edu">Repository</a>
                                <a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition" href="{{ route('databases') }}">Databases</a>
                                <a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition" href="{{ route('docs') }}">Training &amp; Docs</a>
                                <a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition" href="{{ route('newsletters') }}">News</a>
                                <a class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition" target="_blank" href="https://outlook.office365.com/owa/calendar/LibraryInstructionBooking@urbe.university/bookings/">Request Assistance</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
