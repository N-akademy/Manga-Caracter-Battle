@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<<<<<<< HEAD
                    You are logged in!
=======
                    <h1>Profil {{user_name}}</h1>
                    <table>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Mail</th>
                            <th>Mot de passe</th>
                            <th>Modifier vos coordonnées</th>
                        </tr>
                        <tr>
                            <td>{{ $user->lastName }}</td>
                            <td>{{ $user->firstName}}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->password }}</td>
                            <td class="form">
                                <form action="{{route('edituser',$user->id)}}" method="POST">
                                    @csrf
                                    <input type="hidden"name="user_id" value="{{$user->id}}">
                                    <button class="td" type="submit">Modifier</button>
                                </form>
                            </td>
                        </tr>
                    </table>
                        
>>>>>>> ccaf572a2654e0b65aea3cdb00a83d5b39c5ae97
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
