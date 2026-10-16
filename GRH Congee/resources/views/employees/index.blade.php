<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste Des Salariés') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('employees.create') }}" class="inline-block rounded bg-blue-500 text-white font-bold py-2 px-4 mt-4">Ajouter Salarié</a>

                    <table class="min-w-full table-auto mt-4">
                        <thead>
                            <tr>
                                <th class="bg-gray-200 border text-left px-4 py-2">Name</th>
                                <th class="bg-gray-200 border text-left px-4 py-2">Email</th>
                                <th class="bg-gray-200 border text-left px-4 py-2">Poste</th>
                                <th class="bg-gray-200 border text-left px-4 py-2">Tél Pro</th>
                                <th class="bg-gray-200 border text-left px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                                <tr>
                                    <td class="border px-4 py-2">{{ $employee->name }}</td>
                                    <td class="border px-4 py-2">{{ $employee->email }}</td>
                                    <td class="border px-4 py-2">{{ $employee->position }}</td>
                                    <td class="border px-4 py-2">{{ $employee->mobile }}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('employees.edit', $employee->id) }}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">Edit</a>
                                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
