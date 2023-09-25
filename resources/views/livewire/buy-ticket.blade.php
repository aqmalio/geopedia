<div>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Event name
                </th>
                <th scope="col" class="px-6 py-3">
                    Date
                </th>
                <th scope="col" class="px-6 py-3">
                    Lokasi
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">

                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $e)

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$e->name}}
                </th>
                <td class="px-6 py-4">
                {{$e->date}}
                </td>
                <td class="px-6 py-4">
                    {{$e->location}} <br> <small>{{$e->type}} </small>
                </td>
                <td class="px-6 py-4">
                    {{$e->amount}}
                </td>
                <td>
                    <x-button wire:click="buy({{ $e->id }})">Buy</x-button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <x-dialog-modal wire:model.live="buyModal">
            <x-slot name="title">
                {{ __('Your Ticket') }}
            </x-slot>

            <x-slot name="content">
                Ticket successfully buyed. Save QR Code to join your event
                <div class="mt-4">
                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{$qrCode}}" alt="">
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-secondary-button wire:click="$toggle('buyModal')">
                    {{ __('Okey') }}
                </x-secondary-button>
            </x-slot>
        </x-dialog-modal>
</div>
