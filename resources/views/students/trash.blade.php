@extends('layouts.main')


@section('main')
    <h1>Cestino</h1>
    <div class="d-flex my-4">
        <a class="btn btn-outline-secondary" href="{{ route('students.index') }}">Torna all'elenco</a>
    </div>
    <section class="row row-cols-3">
        @foreach ($students as $student)
            <div class="card col m-2" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $student->first_name }} {{ $student->last_name }}</h5>
                </div>
            </div>
        @endforeach
    </section>
@endsection
