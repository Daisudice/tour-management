<x-app-layout>
    <x-sidebar/>
    <x-slot name="title">Tour Dashboard</x-slot>
{{--
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
         Dashboard
        </h2>


    </x-slot> --}}

    <div class="flex justify-center ms-40 px-20 py-12 h-full">
        <div class="flex flex-column mx-auto sm:px-6 lg:px-2 mt-16">


                <div class="flex flex-column px-4 py-4">
                    <span class="text-lg text-bold">Travel Agent</span>
                </div>

                <div class="flex justify-end px-6">
                    <button class="px-2 py-2 bg-slate-800 rounded text-white" name="" id="" data-bs-target="#registerModal" data-bs-toggle="modal"><i class="fa fa-plus"></i> Add Employee</button>
                </div>


                {{-- @livewire('modal-form',['modalId' => 'registerModal']) --}}
                <livewire:modal-form modalId="registerModal"/>

                <div class="p-6 text-gray-900">
                    <div class="flex flex-col">

                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <livewire:travel-agent-table/>

                    </div>


                                </div>
                </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>





</x-app-layout>
