<x-app-layout>
    <x-slot name="header">
        <div class="leading-tight">
            <div class="float-left">
                <h2 class="font-semibold text-xl text-gray-800">
                    {{ __('Product Information') }}
                </h2>
            </div>

            <div class="float-right">
                <a href="{{ route('admin.products') }}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-3">
                    Back
                </a>
                @hasrole('Admin|Publisher')
                    <a href="{{ route('admin.products.update', ['id' => $id]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Edit
                    </a>
                @endhasrole
            </div>
            <div class="clearfix"></div>
            <br />
            <br />
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @livewire('admin.products.product', ['id' => $id])
        </div>
    </div>
</x-app-layout>
