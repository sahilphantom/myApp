@extends('layouts.main')

@section('content')
    <h1>About Us</h1>
    <p><strong>{{ $companyName }}</strong></p>
    <p>{{ $description }}</p>
    <h3>Our Team:</h3>
    <ul>
        @foreach($team as $member)
            <li>{{ $member }}</li>
        @endforeach
    </ul>
@endsection
