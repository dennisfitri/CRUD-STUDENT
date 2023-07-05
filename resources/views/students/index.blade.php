@extends('students.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Students CRUD
                    </div>
                    <div class="card-body">
                        <a href="{{ route('students.create') }}" class="btn btn-success mb-3">Add New Student</a>

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                {{ $message }}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Course</th>
                                    <th>Fee</th>
                                    <th width="300px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $student->nama }}</td>
                                        <td>{{ $student->course }}</td>
                                        <td>{{ $student->fee }}</td>
                                        <td>
                                            <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                                                <a class="btn btn-info" href="{{ route('students.show', $student->id) }}">Show</a>
                                                <a class="btn btn-primary" href="{{ route('students.edit', $student->id) }}">Edit</a>

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{ $students->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
