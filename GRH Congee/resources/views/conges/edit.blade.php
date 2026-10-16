<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier Congé') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('conges.update', $conge->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="employee_id" class="block text-gray-700 font-bold">Employee:</label>
                            <select name="employee_id" id="employee_id" class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-400" required>
                                @foreach ($employees as $employee)
                                    <option value="{{ $employee->id }}" {{ $employee->id == $conge->employee_id ? 'selected' : '' }}>{{ $employee->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="start_date" class="block text-gray-700 font-bold">Start Date:</label>
                            <input type="date" name="start_date" id="start_date" class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-400" value="{{ $conge->start_date }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="end_date" class="block text-gray-700 font-bold">End Date:</label>
                            <input type="date" name="end_date" id="end_date" class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-400" value="{{ $conge->end_date }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="reason" class="block text-gray-700 font-bold">Reason:</label>
                            <textarea name="reason" id="reason" rows="4" class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-400" required>{{ $conge->reason }}</textarea>
                        </div>

                        <button type="submit" class="rounded bg-blue-500 text-white font-bold py-2 px-4 mx-auto block">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
