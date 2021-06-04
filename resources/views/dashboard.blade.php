<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        Assessment Information
                    </div>

                    <div class="mt-6 text-gray-500">
                        <p>This was built using Laravel 8, using jetstream live-wire and tailwind UI for the frontend.</p>
                        <br />
                        <p>The different accounts are:</p>
                        <ul>
                            <li>Admin - <strong>admin@test.com</strong></li>
                            <li>Author - <strong>author@test.com</strong></li>
                            <li>Publisher - <strong>publisher@test.com</strong></li>
                            <li>Client - <strong>client@test.com</strong></li>
                        </ul>
                        <br />
                        <p>All of these accounts use the same default password of <strong>12345678a!</strong></p>

                        <br />
                        <p>Should you need to contact me for any questions:</p>
                        <ul>
                            <li>Email: <strong>josh1@live.co.za</strong></li>
                            <li>Cell: <strong>082 796 0921</strong></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
