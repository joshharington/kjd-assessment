<x-app-layout>
    <x-slot name="header">
        <div class="leading-tight">
            <h2 class="font-semibold text-xl text-gray-800">
                {{ __('Update User') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @livewire('admin.users.create-user', ['id' => $id])
        </div>
    </div>
</x-app-layout>
