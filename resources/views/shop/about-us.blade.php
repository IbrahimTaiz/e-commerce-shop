@extends('layouts.app')

@section('content')
    <header class="bg-dark py-3">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">{{ $title }}</h1>
            </div>
        </div>
    </header>

    <div class="container py-5">
        <h2>A little about us:</h2>
        
        <div>
            <strong>Raw HTML content:</strong>
            {!! $rawHtml !!}
        </div>

        <hr>

        <div>
            @php
                $timestamp = time();
                $formattedDate = date('Y-m-d H:i:s', $timestamp);
            @endphp
            <strong>Using the @php directive to get the current server time:</strong>
            <p>This page was rendered at: {{ $formattedDate }}</p>
        </div>
    </div>
@endsection