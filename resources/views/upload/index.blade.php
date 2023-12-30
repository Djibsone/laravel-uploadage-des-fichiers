@extends('base')

@section('title', 'Les images')

@section('content')
    <div class="container">
        <div class="row my-3">
            @foreach ($images as $image)
                @include('shared.card')
            @endforeach
        </div>
    </div>
@endsection