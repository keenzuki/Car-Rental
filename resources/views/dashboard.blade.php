@extends('layouts.app')
@section('content')
    <h1 class="text-center fs-3">Welcome back {{ Auth::user()->first_name }}</h1>
@endsection
