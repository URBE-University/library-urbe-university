<div>
    <button wire:click="$toggle('modal')" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</button>
    <x-jet-confirmation-modal wire:model="modal">
        <x-slot name="title">Delete asset</x-slot>
        <x-slot name="content">
            <p>Are you sure you want to delete this asset? This action cannot be undone.</p>
        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modal')">Nevermind</x-jet-secondary-button>
            <x-jet-danger-button wire:click.prevent="delete" class="ml-4">I'm sure. Delete asset.</x-jet-danger-button>
        </x-slot>
    </x-jet-confirmation-modal>
</div>
