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
@endsection
