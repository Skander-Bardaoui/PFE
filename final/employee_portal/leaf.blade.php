<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Interface Salarié') }}
        </h2>

        <div class="flex justify-center">
            @include('grh.employee_portal.employee_navbar')
        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    @php
                    $currentDate = now()->format('Y-m-d');
                    @endphp

                    <form method="POST" action="{{ route('leaves.addnew') }}">
                        @csrf

                        <div class="mb-4">
                            <input type="hidden" class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-400" id="employee_id" name="employee_id" value="{{ $employee->id}}">
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold" for="leave_date">Date Congé</label>
                            <input type="date" class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-400" id="leave_date" name="leave_date" value={{$currentDate}} required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold" for="duration">Durée</label>
                            <input type="number" class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-400" id="duration" name="duration" value=1 required>
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


                        <div class="flex justify-center">
                            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md">
                                Envoyer Demande
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-6">
                        @foreach($leaves as $leaf)
                        <div class="border border-gray-200 rounded-lg">
                            <div class="bg-white overflow-hidden shadow-md rounded-lg">
                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2 flex justify-center ">Date Congé: {{ $leaf->leave_date }}</div>
                                    
                                    <p class="text-gray-700 text-base">
                                        Durée: {{ $leaf->duration }} jours<br>
                                        Priorité: {{ $leaf->priority }}<br>
                                        Motif: {{ $leaf->note }}<br>
                                    </p>

                                </div>

                                <div class="px-6 py-4 flex justify-between">
                                    {{ $leaf->validation}}
                                    <form action="{{ route('leaves.destroy', $leaf->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500">Delete</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                        @endforeach
                    </div>


                </div>
            </div>
        </div>
    </div>

</x-app-layout>