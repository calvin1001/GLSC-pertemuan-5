@extends('layouts.main')

@section('container')
    
    <h1>Halaman About</h1>
    <h1>{{ $nama }}</h1>
    <p>{{  $film }}</p>
    <img src= {{ $gambar }} alt="{{ $film }}">
 @endsection