@extends('layouts.main')


@section('main')
    @if (session('alert-message'))
        <div class="alert alert-{{ session('alert-type') }}">
            {{ session('alert-message') }}
        </div>
    @endif

    <div class="d-flex justify-content-between my-4 gap-5 align-items-center ">

        {{-- # Bootne per aggiungere uno studente --}}
        <a class="btn btn-outline-primary" href="{{ route('students.create') }}">Aggiungi studente</a>

        {{-- # Form per la searchbar --}}
        <form method="GET" action="{{ route('students.index') }}" class="d-flex mb-3 align-items-end ">

            @csrf
            <div>
                <label for="search" class="form-label">Cerca uno o più studenti</label>
                <input type="text" class="form-control" id="search" name="search">
            </div>
            <button class="btn btn-primary ms-3">Cerca</button>
            <button class="btn btn-warning ms-3">Ripristina Filtri</button>
        </form>
        {{-- # Bottone per il cestino --}}
        <a class="btn btn-outline-secondary" href="{{ route('students.trash') }}">Vai al cestino</a>
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
                    <div class="my-3">
                        <a class="btn btn-outline-info" href="{{ route('students.show', $student) }}">Info</a>
                        <a class="btn btn-outline-success" href="{{ route('students.edit', $student) }}">Modifica</a>
                    </div>
                    <form class="destroy-form" method="POST" action="{{ route('students.destroy', $student) }}"
                        data-name="{{ $student->getFullName() }}">
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
