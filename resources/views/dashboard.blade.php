<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class='th-lg'>#</th>
                                <th class='th-lg'>Nombre de usuario</th>
                                <th class='th-lg'>E-mail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <th scope="row">#</th>
                                <td> {{$user->name}}</td>
                                <td> {{$user->email}}</td>
                            </tr>    
                            @endforeach
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
