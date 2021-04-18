@extends('layout')

@section('content')

<style>
  .push-top {
    margin-top: 100px;
  }
</style>
<nav class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand">Student Management / Laravel 8</a>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Search">
        <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Recherche</button>
    </form>
</nav>
<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
  <table class="table">
    <thead>
        <tr class="table-info">
          <td>ID</td>
          <td>Nom</td>
          <td>Email</td>
          <td>Téléphone</td>
          <td>Mot de passe</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($student as $students)
        <tr>
            <td>{{$students->id}}</td>
            <td>{{$students->name}}</td>
            <td>{{$students->email}}</td>
            <td>{{$students->phone}}</td>
            <td>{{$students->password}}</td>
            <td class="text-center">
                <a href="{{ route('students.edit', $students->id)}}" class="btn btn-info btn-sm" >Modifier</a>
                <form action="{{ route('students.destroy', $students->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-info btn-sm" type="submit">Supprimer</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
      <a href="{{ route('students.create') }}" class="btn btn-info btn-sm">Ajouter étudiant</a>
<div>
@endsection
