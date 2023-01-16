<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Code
        </h2>
    </x-slot>
        <table class="table table-striped">
        <thead class="font-bold bg-gray-300 border-b-2">
            <td class="px-4 py-2">ID</td>
            <td class="px-4 py-2">Code</td>
            <td class="px-4 py-2">Status</td>
            <td class="px-4 py-2">Name User</td>
            <td class="px-4 py-2">Name Offer</td>
        </thead>
        <tbody>
            @foreach($codes as $code)
            <tr>
                <td class="px-4 py-2">{{ $code->id }}</td>
                <td class="px-4 py-2">{{ $code->name }}</td>
                <td class="px-4 py-2">@if($code->activated == 0)
                    Sin canjear
                @else
                    Canjeado
                @endif
                </td>
                <td class="px-4 py-2">{{ $code->user_name }}</td>
                <td class="px-4 py-2">{{ $code->user_offer }}</td>
                <td class="px-4 py-2">
                    <a href='{{ url("/codes/edit/{$code->id}") }}'>
                        <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Canjear</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
