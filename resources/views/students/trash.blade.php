@extends('layouts.main')


@section('main')
    <h1>Cestino</h1>
    <div class="d-flex my-4">
        <a class="btn btn-outline-secondary" href="{{ route('students.index') }}">Torna all'elenco</a>
    </div>
    <section class="row row-cols-3">
        @foreach ($students as $student)
            <div class="card col m-2" style="width: 18rem;">
                <div class="card-body d-flex justify-content-between">
                    <h5 class="card-title">{{ $student->getFullName() }}</h5>
                    <form method="POST" action="{{ route('student.restore', $student) }}">
                        @csrf
                        @method('PATCH')
                        <button class="btn btn-sm btn-success">Ripristina</button>
                    </form>
                </div>
            </div>
        @endforeach
    </section>
@endsection
