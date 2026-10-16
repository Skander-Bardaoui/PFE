<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edition Congé') }}
        </h2>

        <div class="flex justify-center">
            @include('grh.navbar')
        </div>

    </x-slot>



    <div class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form method="POST" action="{{ route('leaves.update', $leaf->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold" for="employee_id">Salarié</label>
                            <select class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-400" id="employee_id" name="employee_id" required>
                                <!-- Loop through employees to populate dropdown options -->
                                @foreach ($employees as $employee)
                                <option value="{{ $employee->id }}" @if ($employee->id == $leaf->id_employee) selected @endif>{{ $employee->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold" for="leave_date">Date Congé</label>
                            <input type="date" class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-400" id="leaf_date" name="leave_date" value="{{ $leaf->leave_date }}" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold" for="duration">Durée</label>
                            <input type="number" class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-400" id="duration" name="duration" value="{{ $leaf->duration }}" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold" for="priority">Priorité</label>
                            <select class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-400" id="priority" name="priority" required>
                                <option value="Pas Urgent" {{ $leaf->priority == 'Pas Urgent' ? 'selected' : '' }}>Pas Urgent</option>
                                <option value="Urgent" {{ $leaf->priority == 'Urgent' ? 'selected' : '' }}>Urgent</option>
                                <option value="Très Urgent" {{ $leaf->priority == 'Très Urgent' ? 'selected' : '' }}>Très Urgent</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold" for="leave_type">Type Congé</label>
                            <select class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-400" id="leave_type" name="leave_type" required>
                                <option value="Congé" {{ $leaf->leave_type == 'Congé' ? 'selected' : '' }}>Congé</option>
                                <option value="Congé Maladie" {{ $leaf->leave_type == 'Congé Maladie' ? 'selected' : '' }}>Congé Maladie</option>
                                <option value="Autre" {{ $leaf->leave_type == 'Autre' ? 'selected' : '' }}>Autre</option>
                            </select>
                        </div>


                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold" for="note">Motif</label>
                            <input type="text" class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-400" id="note" name="note" value="{{ $leaf->note }}">
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold" for="validation">Validé</label>
                            <select class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-400" id="validation" name="validation">
                                <option value="Demande Envoyé" {{ $leaf->validation ? 'selected' : '' }}>Demande Envoyé</option>
                                <option value="Encours_Traitement" {{ !$leaf->validation ? 'selected' : '' }}>Encours_Traitement</option>
                                <option value="Validé" {{ $leaf->validation ? 'selected' : '' }}>Validé</option>
                                <option value="Non Validé" {{ !$leaf->validation ? 'selected' : '' }}>Non Validé</option>
                            </select>
                        </div>


                        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md">Sauvegarder</button>
                    </form>

                </div>
            </div>
        </div>
    </div>


</x-app-layout>