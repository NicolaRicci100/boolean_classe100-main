@extends('layouts.main')


@section('main')
    <form action="{{ route('students.update', $student) }}" method="POST" class="row mt-5 ">
        @method('PUT')
        @csrf

        <div class="mb-3 col-6">
            <label for="first-name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="first-name" name="first_name" value="{{ $student->first_name }}">
        </div>
        <div class="mb-3 col-6">
            <label for="last-name" class="form-label">Cognome</label>
            <input type="text" class="form-control" id="last-name" name="last_name" value="{{ $student->last_name }}">
        </div>
        <div class="mb-3 col-6">
            <label for="last-name" class="form-label">Età</label>
            <input type="number" class="form-control" id="last-name" name="age" value="{{ $student->age }}">
        </div>

        <div>
            <button class="btn btn-warning" type="reset">Ripristina</button>
            <button class="btn btn-success">Modifica</button>
        </div>

    </form>
@endsection
