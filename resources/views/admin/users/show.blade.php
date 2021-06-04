<x-app-layout>
    <x-slot name="header">
        <div class="leading-tight">
            <div class="float-left">
                <h2 class="font-semibold text-xl text-gray-800">
                    {{ __('User Information') }}
                </h2>
            </div>

            <div class="float-right">
                <a href="{{ route('admin.users') }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-3">
                    Back
                </a>
                <a href="{{ route('admin.users.update', ['id' => $id]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Edit
                </a>
            </div>
            <div class="clearfix"></div>
            <br />
            <br />
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @livewire('admin.users.user', ['id' => $id])
        </div>
    </div>
</x-app-layout>
