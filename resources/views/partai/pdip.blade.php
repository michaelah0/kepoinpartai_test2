@extends('layouts.app')

@section('content')
<div class="container d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
    <img src="{{ asset('images/image_3.png') }}" alt="PDIP" style="max-width: 50%; max-height: 50%;">
    <h1>Profile Partai</h1>
@if(isset($profile_pdip))
    <p>Nama Partai: {{ $nama_partai }}</p>
@else
    <p>Data not found</p>
@endif
    <p class="mt-3">Informasi yang ditampilkan tidak tepat? Yuk kirim feedbackmu!</p>
    <a href="{{ route('feedback') }}" class="btn btn-primary mt-3">Feedback</a>
</div>
@endsection
