<!-- resources/views/employees/destroy.blade.php -->

<x-app-layout>

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Confirm Deletion</div>
                    <div class="card-body">
                        <p>Are you sure you want to delete this employee?</p>
                        <form method="POST" action="{{ route('employees.destroy', $employee->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <a href="{{ route('employees.index') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>