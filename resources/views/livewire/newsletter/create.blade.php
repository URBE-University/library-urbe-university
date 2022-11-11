<div>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Upload newsletter
                </h2>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('dashboard') }}" class="text-slate-600">Cancel</a>
                    <button wire:click="save" wire:loading.attr="disabled" wire:target="save" class="px-4 py-1.5 bg-indigo-600 text-white rounded-full disabled:bg-slate-400 disabled:text-black">Save changes</button>
                    <div wire:loading wire:target="save" class="">Working...</div>
                </div>
            </div>
        </div>
    </header>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-jet-input id="name" wire:model="name" type="text" placeholder="Document name" class="w-full" />
                    <x-jet-input-error for="name" class="mt-1 text-sm text-red-600"/>

                    <input type="file" id="file" wire:model="file" accept=".pdf" class="mt-6 block w-full text-sm text-slate-500
                    file:mr-4 file:py-2 file:px-4
                    file:rounded-full file:border-0
                    file:text-sm file:font-semibold
                    file:bg-indigo-50 file:text-indigo-700
                    hover:file:bg-indigo-100">

                    <x-jet-input-error for="file" class="mt-1 text-sm text-red-600"/>
                    <div wire:loading wire:target="file" class="text-slate-600">Uploading...</div>
                    @if ($file)
                        <div class="text-green-600">File ready to store.</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
