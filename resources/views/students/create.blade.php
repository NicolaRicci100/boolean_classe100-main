@extends('layouts.main')


@section('main')
    <form action="{{ route('students.store') }}" method="POST" class="row mt-5 ">
        @csrf
        <div>
            <a href="{{ route('students.index') }}" class="btn btn-outline-primary">Indietro</a>
        </div>
        <div class="mb-3 col-6">
            <label for="first-name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="first-name" name="first_name" value="">
        </div>
        <div class="mb-3 col-6">
            <label for="last-name" class="form-label">Cognome</label>
            <input type="text" class="form-control" id="last-name" name="last_name" value="">
        </div>
        <div class="mb-3 col-6">
            <label for="last-name" class="form-label">Età</label>
            <input type="number" class="form-control" id="last-name" name="age" value="">
        </div>

        <div>
            <button class="btn btn-warning" type="reset">Ripristina</button>
            <button type="submit" class="btn btn-success">Salva</button>
        </div>

    </form>
@endsection
