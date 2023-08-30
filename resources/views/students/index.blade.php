@extends('layouts.main')


@section('main')
    <div class="d-flex my-4">
        <a class="btn btn-outline-primary" href="{{ route('students.create') }}">Aggiungi studente</a>
    </div>
    <ul>
        @foreach ($students as $student)
            <li class="mt-3"><strong>Nome:</strong> {{ $student->first_name }}</li>
            <li><strong>Cognome:</strong> {{ $student->last_name }}</li>
            <li><strong>Età:</strong> {{ $student->age }}</li>
            <a class="btn btn-outline-success" href="{{ route('students.edit', $student) }}">Modifica</a>
            <a class="btn btn-outline-danger" href="{{ route('students.destroy', $student) }}">Distruggi</a>
        @endforeach
    </ul>
@endsection
