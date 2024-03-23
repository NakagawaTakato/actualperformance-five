@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
@endsection

@section('content')
@csrf
<div class="container">
    <a href="/register" class="container-exit"><i class="fa-solid fa-bars"></i></a>
</div>
@endsection
