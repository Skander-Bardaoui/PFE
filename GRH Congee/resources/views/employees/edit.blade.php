<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier un Salarié') }}
        </h2>
    </x-slot>

    <div class="container mx-auto">
        <div class="md:w-2/3 lg:w-1/2 mx-auto">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">
                <form method="POST" action="{{ route('employees.update', $employee->id) }}">
                    @csrf
                    @method('PUT')
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                    <input type="text" name="name" id="name" class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-400" value="{{ $employee->name }}" required>
                </div>
                <div class="mb-4">
                    <label for="position" class="block text-gray-700 text-sm font-bold mb-2">Position:</label>
                    <input type="text" name="position" id="position" class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-400" value="{{ $employee->position }}" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                    <input type="email" name="email" id="email" class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-400" value="{{ $employee->email }}" required>
                </div>
                <div class="mb-4">
                    <label for="mobile" class="block text-gray-700 text-sm font-bold mb-2">Mobile:</label>
                    <input type="text" name="mobile" id="mobile" class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-400" value="{{ $employee->mobile }}" required>
                </div>
                <!-- Add form fields for other attributes here... -->
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update Employee</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
