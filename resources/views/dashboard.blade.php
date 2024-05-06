<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="p-6 bg-white border-b border-gray-200">
            <a href="{{ url('clients') }}">Mostra dades de la taula clients<a/>
        </div>
        <div class="p-6 bg-white border-b border-gray-200">
            <a href="{{ url('autos') }}">Mostra dades de la taula autos<a/>
        </div>
        <div class="p-6 bg-white border-b border-gray-200">
            <a href="{{ url('lloga') }}">Mostra dades de la taula lloga<a/>
        </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <a href="{{ url('clients/create') }}">Crea un nou Client<a/>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
            <a href="{{ url('autos/create') }}">Crea un nou auto<a/>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
            <a href="{{ url('lloga/create') }}">Crea un nou LLoguer<a/>
            </div>
        </div>
        </div>
    </div>
</x-app-layout>
