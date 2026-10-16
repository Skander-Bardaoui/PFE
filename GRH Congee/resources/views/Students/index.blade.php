<!-- resources/views/students/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Student List</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>
                                    <a href="{{ route('students.show', $student->id) }}" class="btn btn-primary">View</a>
                                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this student?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('students.create') }}" class="btn btn-success">Add Student</a>
            </div>
        </div>
        http://localhost:3000/public/dashboard/f0f46a56-fb76-4b32-bbea-bff67da9375d
    </div>
    <iframe
    src="http://localhost:3000/public/dashboard/58006e3b-ccc8-477f-9ca4-34b6b919ee45"
    frameborder="0"
    width="800"
    height="600"
    allowtransparency
</iframe>
    
</x-app-layout>
