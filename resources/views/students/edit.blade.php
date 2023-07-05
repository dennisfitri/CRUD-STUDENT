@extends('students.layout')

@section('content')

<div class="card">
    <div class="card-header">Edit Student</div>
    <div class="card-body">
        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ $student->nama }}">
            </div>
            
            <div class="form-group">
                <label for="course">Course</label>
                <input type="text" name="course" id="course" class="form-control" value="{{ $student->course }}">
            </div>
            
            <div class="form-group">
                <label for="fee">Fee</label>
                <input type="text" name="fee" id="fee" class="form-control" value="{{ $student->fee }}">
            </div>
            
            <button type="submit" style="margin-top: 20px;" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

@endsection
