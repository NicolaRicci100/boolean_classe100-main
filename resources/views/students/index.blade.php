@extends('layouts.main')


@section('main')
    <div class="d-flex my-4">
        <a class="btn btn-outline-primary" href="{{ route('students.create') }}">Aggiungi studente</a>
    </div>
    <section class="row row-cols-3">
        @foreach ($students as $student)
            <div class="card col" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $student->first_name }} {{ $student->last_name }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Età:</strong> {{ $student->age }}</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                    <a class="btn btn-outline-success" href="{{ route('students.edit', $student) }}">Modifica</a>
                    <form method="POST" action="{{ route('students.destroy', $student) }}">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-outline-danger">Distruggi</button>
                    </form>
                </div>
            </div>
        @endforeach
    </section>
@endsection
