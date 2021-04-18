@extends('layout')

@section('content')

<style>
    .container {

    }
    .push-top {
      margin-top: 50px;
    }
</style>
<nav class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand">Student Management / Laravel 8</a>
    <a href="{{ route('students.store') }}" class="btn btn-info btn-sm">Liste des étudiants</a>
</nav>

<div class="card push-top" style="max-width: 550px; margin-left:280px;">
  <div class="card-header">
    Ajouter étudiant
  </div>


  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('students.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Nom</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="phone">Téléphone</label>
              <input type="tel" class="form-control" name="phone"/>
          </div>
          <div class="form-group">
              <label for="password">Mot de passe</label>
              <input type="text" class="form-control" name="password"/>
          </div>
          <button type="submit" class="btn btn-block btn-info">Créer un étudiant</button>
      </form>
  </div>
</div>
@endsection
