@extends('layouts.main')


@section('main')
    <h2><a href="{{ url('/') }}">Home</a></h2>
    <a href="#">Portfolio</a>
    <a class="d-block" href="{{ route('students.index') }}">Studenti</a>
@endsection
