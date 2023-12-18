@extends('layouts.layout')

@section('title')
    Home
@endsection

@section('content')
<div class="block">
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
        @else
            <p>No Data in session</p>
        @endif
</div>
@endsection
