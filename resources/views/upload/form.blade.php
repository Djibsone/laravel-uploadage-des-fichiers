@extends('base')

@section('title', 'Enregistrement d\'image')

@section('content')
    <form method="post" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="mb-3">
                @include('shared.input', ['class' => 'form-control', 'type' => 'file', 'label' => 'Image', 'name' => 'image'])
            </div>
            <button class="btn btn-primary btn-block">Télécharger</button>
        </div>
        
    </form>
@endsection