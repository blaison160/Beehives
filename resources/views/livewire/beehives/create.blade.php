<div>
    <form wire:submit="save" class="flex flex-col gap-6">
        <flux:input
            wire:model="name"
            label="{{ __('Beehive Name') }}"
            type="text"
            name="name"
            required
            autofocus
        />

        <flux:input
            wire:model="ownerFirstName"
            label="{{ __('Beehive owner\'s first Name') }}"
            type="text"
            name="ownerFirstName"
            required
            autofocus
        />

        <flux:input
            wire:model="ownerLastName"
            label="{{ __('Beehive owner\'s last name') }}"
            type="text"
            name="ownerLastName"
            required
            autofocus
        />

        <div>
            <flux:button variant="primary" type="submit">{{ __('Save') }}</flux:button>
        </div>
    </form>
</div>
