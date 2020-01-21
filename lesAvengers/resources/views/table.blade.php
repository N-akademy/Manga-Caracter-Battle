@extends('layouts.templates')

@section('content')



<h1 class="titre">Combattant </h1>

<table class="table table-dark">
    <br>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Attaque</th>
        <th>Force</th>
        <th>Point de vie</th>
        
            <th>Modifier</th>
            <th>Supprimer</th>
       
    </tr>
    @foreach ($gamers as $gamer)
        <tr>
            <th class="id">{{ $gamer->id }}</th>
            <td>{{ $gamer->name }}</td>
            <td>{{ $gamer->attack}}</td>
            <td>{{ $gamer->power }}</td>
            <td>{{ $gamer->lifePoint }}</td>
            
            
                    <td class="form">
                    <form action="{{route('edit',$gamer->id)}}" method="POST">
                        @csrf
                        <input type="hidden"name="gamer_id" value="{{$gamer->id}}">
                        <button class="td" type="submit">Modifier</button>
                    </form>
                    </td>
                    <td class="form">
                    <form action="{{route('deleteGamer',$gamer->id)}}" method="POST">
                        @csrf
                        <input type="hidden"name="gamer_id" value="{{$gamer->id}}">
                        <button class="td" type="submit">Supprimer</button>
                    </form>
                    </td>
           
        </tr>
    @endforeach
</table>


<h2>Créer un joueur </h2>



<form action="{{route('createGamer')}}" method="POST">
    @csrf
    <input type="hidden">
    <button class="td" type="submit">Créer</button>
</form>




@endsection