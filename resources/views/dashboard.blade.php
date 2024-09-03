<x-app-layout>
    <x-sidebar/>
    <x-slot name="title">Tour Dashboard</x-slot>
{{--
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         Dashboard
        </h2>
    </x-slot> --}}

    <div class="ms-40 px-20 py-12 bg-slate-500">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-16">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ms-4 px-4">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
