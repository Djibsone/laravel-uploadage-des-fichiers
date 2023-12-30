<!DOCTYPE html>
<html lang="fr">

@php
  $route = request()->route()->getName()
@endphp

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Uploadage des images</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-primary mb-3">
    <a class="navbar-brand text-white" href="#">Gestion des images</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
          <li class="nav-item">
              <a @class(['nav-link text-white', 'active' => str_starts_with($route, 'upload.')], 'text-white') href="{{ route('upload.index') }}">Affichage d'image</a>
          </li>
          <li class="nav-item">
              <a @class(['nav-link text-white', 'active' => str_starts_with($route, 'upload.')], 'text-white') href="{{ route('upload.upload') }}">Enregistrer une image</a>
          </li>
      </ul>
      <div class="ml-auto">
        <div class="d-flex align-items-center">
            <form class="nav-item ml-2" action="" method="post">
                @method('delete')
                @csrf
                <button class="btn btn-light text-dark">Se déconnecter</button>
            </form>
        </div>
      </div>
    </div>
  </nav>

  <div class="container mt-4">

    @include('shared.flash')

    @yield('content')

  </div>

  <script src="{{ asset('jquery.min.js') }}"></script>
  <script src="{{ asset('bootstrap.min.js') }}"></script>
</body>
</html>