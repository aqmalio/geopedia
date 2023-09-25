<x-form-section submit="submitEvent">
    <x-slot name="title">
        Create Event
    </x-slot>

    <x-slot name="description">
        Make your event
    </x-slot>

    <x-slot name="form">

        <div class="col-span-6 sm:col-span-4">
            <x-label for="name" value="{{ __('Event Name') }}" />
            <x-input id="name" type="text" class="mt-1 block w-full" wire:model="name" required autocomplete="name" />
            <x-input-error for="name" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="type" value="{{ __('Event Type') }}" />
            <select wire:model="type"  class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" required id="type">
                <option readonly>--Select--</option>
                <option value="offline">Ofline</option>
                <option value="online">Online</option>
            </select>
            <x-input-error for="type" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="date" value="{{ __('Event date') }}" />
            <x-input id="date" type="date" class="mt-1 block w-full" wire:model="date" required autocomplete="date" />
            <x-input-error for="date" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="location" value="{{ __('Event location') }}" />
            <x-input id="location" type="text" class="mt-1 block w-full" wire:model="location" required autocomplete="location" />
            <x-input-error for="location" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="amount" value="{{ __('Event amount') }}" />
            <x-input id="amount" type="number" class="mt-1 block w-full" wire:model="amount" required autocomplete="amount" />
            <x-input-error for="amount" class="mt-2" />
        </div>

    </x-slot>

    <x-slot name="actions">
        <x-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button wire:loading.attr="disabled" wire:target="name">
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section>
