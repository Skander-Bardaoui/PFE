<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajouter Congé') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('conges.store') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="employee_name" class="block text-gray-700 font-bold">Employee:</label>
                            <select name="employee_name" id="employee_name" class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-400" required>
                                @foreach ($employees as $employee)
                                    <option value="{{ $employee->name }}">{{ $employee->name }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="mb-4">
                            <label for="start_date" class="block text-gray-700 font-bold">Start Date:</label>
                            <input type="date" name="start_date" id="start_date" class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-400" required>
                        </div>

                        <div class="mb-4">
                            <label for="end_date" class="block text-gray-700 font-bold">End Date:</label>
                            <input type="date" name="end_date" id="end_date" class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-400" required>
                        </div>

                        <div class="mb-4">
                            <label for="reason" class="block text-gray-700 font-bold">Reason:</label>
                            <textarea name="reason" id="reason" rows="4" class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-400" required></textarea>
                        </div>

                        <button type="submit" class="rounded bg-blue-500 text-white font-bold py-2 px-4 mx-auto block">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
