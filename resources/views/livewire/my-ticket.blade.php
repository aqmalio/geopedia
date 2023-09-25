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
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Buyed At
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $t)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$t->event->name}}
                </th>
                <td class="px-6 py-4">
                    {{$t->event->date}}
                </td>
                <td class="px-6 py-4">
                    {{$t->event->amount}}
                </td>
                <td class="px-6 py-4">
                    {{$t->created_at}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
