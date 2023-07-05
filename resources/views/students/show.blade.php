@extends('students.layout')

@section('content')

<div class="card">
    <div class="card-header">Student Details</div>
    <div class="card-body">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ $student->nama }}" readonly>
        </div>

        <div class="form-group">
            <label for="course">Course</label>
            <input type="text" name="course" id="course" class="form-control" value="{{ $student->course }}" readonly>
        </div>

        <div class="form-group">
            <label for="fee">Fee</label>
            <input type="text" name="fee" id="fee" class="form-control" value="{{ $student->fee }}" readonly>
        </div>

        <a class="btn btn-primary" style="margin-top: 20px;" href="{{ route('students.edit', $student->id) }}">Edit</a>
    </div>
</div>

@endsection
