<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Offers
        </h2>
    </x-slot>
        <table class="table table-striped">
        <thead class="font-bold bg-gray-300 border-b-2">
            <td class="px-4 py-2">ID</td>
            <td class="px-4 py-2">Title</td>
        </thead>
        <tbody>
        @foreach($offers as $offer)
            <tr>
                <td class="px-4 py-2">{{ $offer->id }}</td>
                <td class="px-4 py-2"><a href='{{ url("/codes/create/{$offer->id}") }}'>{{ $offer->name }}</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-app-layout>
