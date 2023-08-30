@extends('layouts.main')

@section('main')
{{-- card --}}
<div class="card mt-4">
    <div class="card-header">
        <h5 class="card-title text-center">{{$student->first_name}} {{$student->last_name}}</h5>
      </div>
    <div class="card-body">
      <p class="card-text">
            {{$student->first_name}} {{$student->last_name}} è uno studente della classe 100 di Boolean. <br>
            {{$student->first_name}} ha {{$student->age}} anni.
        </p>
        <hr>
        {{-- buttons --}}
        <div class="d-flex justify-content-end">
            <a class="btn btn-outline-success me-2" href="{{ route('students.edit', $student) }}">Modifica</a>
            <form method="POST" action="{{ route('students.destroy', $student) }}">
                @method('DELETE')
                @csrf
                <button class="btn btn-outline-danger">Distruggi</button>
            </form>
        </div>
    </div>
  </div>
@endsection