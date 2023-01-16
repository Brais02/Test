<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        </h2>
    </x-slot>
    <form action="{{ url('codes') }}" method="POST">
        {!! csrf_field() !!}

        <input type="hidden" name="name" value="{{ $name }}"><br>
        <input type="hidden" name="activated" value="{{ $activated }}"><br>
        <input type="hidden" name="user_id" value="{{ $user }}"><br>
        <input type="hidden" name="offers_id" value="{{ $offer }}"><br>
    </form>

    <script type="text/javascript">
        // Al acceder a la página el formulario se envia de manera automatica
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelector('form').submit();
        })
    </script>
</x-app-layout>
