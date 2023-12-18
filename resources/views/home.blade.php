@extends('layouts.layout')

@section('title')
    Home
@endsection

@section('content')
    @if (session('status'))
        <div class="block" style="background-color: rgb(255, 134, 134)">
            <h1 style="color: red">{{ session('status') }}</h1>
        </div>
    @endif
    <br>
    <div class="block" >
        <h1>Hello World</h1>
        <h2>Is rabit variable truthy? => {{ $rabit ? 'Yes' : 'No' }}</h2>
        <h2>Value stored in $willVariable => {{ $willVariable }}</h2>
    </div>
    <br>
    <div class="block">
        <h1>Session Data</h1>
        @if ($formData)
            <p><strong>Name:</strong> {{ $formData['name'] ?? '[Not Provided]' }}</p>
            <p><strong>Info:</strong> {{ $formData['info'] ?? '[Not Provided]' }}</p>
            <form action="{{route('clear-session')}}" method="POST">
            @csrf
            <button type="submit">Clear Session Data</button>
            </form>
        @else
            <p><strong>No Data in session</strong></p>
        @endif
    </div>
@endsection
