@extends('layouts.main')


@section('main')
    <form action="{{ route('students.store') }}" method="POST" class="row mt-5 ">
        @csrf
        <div>
            <a href="{{ route('students.index') }}" class="btn btn-outline-primary">Indietro</a>
        </div>
        <div class="mb-3 col-6">
            <label for="first-name" class="form-label">Nome</label>
            <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first-name" name="first_name" value="">
            {{-- error message --}}
            @error('first_name')
                 <div id="first-nameFeedback" class="invalid-feedback">
                    Nome non valido
                </div>
            @enderror
        </div>
        <div class="mb-3 col-6">
            <label for="last-name" class="form-label">Cognome</label>
            <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last-name" name="last_name" value="">
            {{-- error message --}}
            @error('last_name')
                 <div id="last-nameFeedback" class="invalid-feedback">
                    Cognome non valido
                </div>
            @enderror
        </div>
        <div class="mb-3 col-6">
            <label for="last-name" class="form-label">Età</label>
            <input type="number" class="form-control @error('age') is-invalid @enderror" id="last-name" name="age" value="">
            {{-- error message --}}
            @error('age')
                 <div id="ageFeedback" class="invalid-feedback">
                    Età non valida
                </div>
            @enderror
        </div>

        <div>
            <button class="btn btn-warning" type="reset">Ripristina</button>
            <button type="submit" class="btn btn-success">Salva</button>
        </div>

    </form>
@endsection
