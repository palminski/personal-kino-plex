@extends('layout')

@section('title')
Home
@endsection

@section('content')
    <h1>Hello World</h1>
    <h2>Is rabit variable truthy? => {{ $rabit ? 'Yes' : 'No' }}</h2>
    <h2>Value stored in $willVariable => {{ $willVariable }}</h2>
@endsection
