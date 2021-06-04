<x-app-layout>
    <x-slot name="header">
        <div class="leading-tight">
            <div class="float-left">
                <h2 class="font-semibold text-xl text-gray-800">
                    {{ __('Users') }}
                </h2>
            </div>

            <div class="float-right">
                <a href="{{ route('admin.users.store') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Create
                </a>
            </div>
            <div class="clearfix"></div>
            <br />
            <br />
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('admin.users.list-users')
            </div>
        </div>
    </div>
</x-app-layout>
