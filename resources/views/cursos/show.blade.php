@extends('layouts.plantilla')

@section('title', 'Mostrar el curso' . $curso )

@section('content')
    <h1>Bienvenidos al curso {{ $curso }}</h1>
@endsection
