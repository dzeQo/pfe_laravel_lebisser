@extends('layout')

@section('content')
    <div class="card-body shadow">
        <h1> Contact Message </h1>
        <p>Sujet de contact : {{$msgs['subject']}}</p>
        <p>Nom : {{$msgs['name']}}</p>
        <p>Email : {{$msgs['email']}}</p>
        <p>Message: {{$msgs['message']}}</p>
        <p> envoyez á : {{ $msgs->created_at->format('d-m-y') }}</p>
    </div>
@endsection