<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajouter Salariés') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                    <form method="POST" action="{{ route('employees.store') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="largueur" class="block text-gray-700 font-bold">Name:</label>
                            <input class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-400" type="text" name="name" id="name" required>
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 font-bold">Email:</label>
                            <input class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-400" type="email" name="email" id="email" required>
                        </div>

                        <div class="mb-4">
                            <label for="mobile" class="block text-gray-700 font-bold">Tél:</label>
                            <input class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-400" type="text" name="mobile" id="mobile" required>
                        </div>

                        <div class="mb-4">
                            <label for="position" class="block text-gray-700 font-bold">Poste:</label>
                            <input class="w-full border rounded-md py-2 px-3 text-gray-700 focus:outline-none focus:border-blue-400" type="text" name="position" id="position">
                        </div>
                        <!-- Add more input fields for other employee details -->

                        <button type="submit" class="rounded bg-blue-500 text-white font-bold py-2 px-4 mx-auto block" >Ajouter</button>
                    </form>
                    <!-- employees/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create Employee</h2>
        <form action="{{ route('employees.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="position">Position:</label>
                <input type="text" class="form-control" id="position" name="position" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile:</label>
                <input type="text" class="form-control" id="mobile" name="mobile">
            </div>
            <!-- Add more fields here if needed -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

                </div>
            </div>
        </div>
    </div>
</x-app-layout>