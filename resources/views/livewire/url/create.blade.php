<div>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    New external resource
                </h2>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('dashboard') }}" class="text-slate-600">Cancel</a>
                    <button wire:click="save" class="px-4 py-1.5 bg-indigo-600 text-white rounded-full">Save changes</button>
                </div>
            </div>
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-jet-input id="name" wire:model="name" type="text" placeholder="Resource name" class="w-full" />
                    <x-jet-input-error for="name" class="mt-1 text-sm text-red-600"/>

                    <x-jet-input type="url" id="url" wire:model="url" class="mt-6 w-full" placeholder="Enter the resource's url here"/>
                    <x-jet-input-error for="url" class="mt-1 text-sm text-red-600"/>
                </div>
            </div>
        </div>
    </div>
</div>
