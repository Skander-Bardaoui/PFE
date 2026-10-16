<!-- resources/views/products/create.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nv. Congé') }}
        </h2>

        <div class="flex justify-center">
            @include('grh.navbar')
        </div>

    </x-slot>
    <div class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form method="POST" action="{{ route('leaves.store') }}">
                        @csrf

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold" for="employee_id">Salarié</label>
                            <select class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-400" id="employee_id" name="employee_id" required>
                                <!-- Loop through employees to populate dropdown options -->
                                @foreach ($employees as $employee)
                                <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold" for="leave_date">Date Congé</label>
                            <input type="date" class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-400" id="leave_date" name="leave_date" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold" for="duration">Durée</label>
                            <input type="number" class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-400" id="duration" name="duration" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold" for="priority">Priorité</label>
                            <select class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-400" id="priority" name="priority" required>
                                <option value="Pas Urgent">Pas Urgent</option>
                                <option value="Urgent">Urgent</option>
                                <option value="Très Urgent">Très Urgent</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold" for="leave_type">Type Congé</label>
                            <select class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-400" id="leave_type" name="leave_type" required>
                                <option value="Congé">Congé</option>
                                <option value="Congé Maladie">Congé Maladie</option>
                                <option value="Autre">Autre</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold" for="note">Motif</label>
                            <input type="text" class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-400" id="note" name="note">
                        </div>

                        
                        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md">Sauvegarder</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>