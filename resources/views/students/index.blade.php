@extends('layouts.main')


@section('main')
    <div class="d-flex my-4 gap-5 align-items-center ">
        <a class="btn btn-outline-primary" href="{{ route('students.create') }}">Aggiungi studente</a>
        <form method="GET" action="{{ route('students.index') }}" class="d-flex mb-3 align-items-end ">

            @csrf
            <div>
                <label for="search" class="form-label">Cerca uno o più studenti</label>
                <input type="text" class="form-control" id="search" name="search">
            </div>
            <button class="btn btn-primary ms-3">Cerca</button>
            <button class="btn btn-warning ms-3">Ripristina Filtri</button>
        </form>
    </div>
    <section class="row row-cols-3">
        @foreach ($students as $student)
            <div class="card col m-2" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $student->getFullName() }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Età:</strong> {{ $student->age }}</h6>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias facilis odit
                        illo
                        provident quidem error consectetur</p>
                    <a class="btn btn-outline-success" href="{{ route('students.edit', $student) }}">Modifica</a>
                    <form class="d-inline ms-2 destroy-form" method="POST"
                        action="{{ route('students.destroy', $student) }}" data-name="{{ $student->getFullName() }}">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-outline-danger">Distruggi</button>
                    </form>
                </div>
            </div>
        @endforeach
    </section>
@endsection

@section('scripts')
    @vite('resources/js/destroy-form.js')
@endsection
