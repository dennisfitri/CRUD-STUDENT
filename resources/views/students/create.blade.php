@extends('students.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Create Student
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Error!</strong> Please check the form below for errors.
                            </div>
                        @endif

                        <form action="{{ route('students.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
                                @error('nama')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="course">Course</label>
                                <input type="text" class="form-control" id="course" name="course" value="{{ old('course') }}">
                                @error('course')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="fee">Fee</label>
                                <input type="text" class="form-control" id="fee" name="fee" value="{{ old('fee') }}">
                                @error('fee')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" style="margin-top: 20px;" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

