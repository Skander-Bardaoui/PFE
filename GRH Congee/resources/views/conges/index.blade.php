<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste des Congés') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('conges.create') }}" class="inline-block rounded bg-blue-500 text-white font-bold py-2 px-4 mt-4">Ajouter Congé</a>

                    <table class="min-w-full table-auto mt-4">
                        <thead>
                            <tr>
                                <th class="bg-gray-200 border text-left px-4 py-2">Employee</th>
                                <th class="bg-gray-200 border text-left px-4 py-2">Start Date</th>
                                <th class="bg-gray-200 border text-left px-4 py-2">End Date</th>
                                <th class="bg-gray-200 border text-left px-4 py-2">Reason</th>
                                <th class="bg-gray-200 border text-left px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($conges as $conge)
                            <tr>
                                <td class="border px-4 py-2">{{ $conge->employee_name }}</td>
                                <td class="border px-4 py-2">{{ $conge->start_date }}</td>
                                <td class="border px-4 py-2">{{ $conge->end_date }}</td>
                                <td class="border px-4 py-2">{{ $conge->reason }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('conges.edit', $conge->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('conges.destroy', $conge->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this congé?')">Delete</button>
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
