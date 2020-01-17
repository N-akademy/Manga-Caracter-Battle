@extends('layouts.templates')

@section('content')




<h1>Combattant </h1>

<table>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Attaque</th>
        <th>Force</th>
        <th>Point de vie</th>
        
        @if(Auth::check())
            @if(Auth::user()->role=='administator')
            <th>Modifier</th>
            <th>Supprimer</th>
            @endif
        @endif
    </tr>
    @foreach ($gamerworld as $gamer)
        <tr>
            <th class="id">{{ $gamer->id }}</th>
            <td>{{ $gamer->name }}</td>
            <td>{{ $gamer->attack}}</td>
            <td>{{ $gamer->force }}</td>
            <td>{{ $gamer->lifePoint }}</td>
            
            @if(Auth::check())
                @if(Auth::user()->role=='administator')
                    <td class="form">
                    <form action="{{route('editgamer',$gamer->id)}}" method="POST">
                        @csrf
                        <input type="hidden"name="gamer_id" value="{{$gamer->id}}">
                        <button class="td" type="submit">Modifier</button>
                    </form>
                    </td>
                    <td class="form">
                    <form action="{{route('deletegamer',$gamer->id)}}" method="POST">
                        @csrf
                        <input type="hidden"name="gamer_id" value="{{$gamer->id}}">
                        <button class="td" type="submit">Supprimer</button>
                    </form>
                    </td>
                @endif
            @endif
        </tr>
    @endforeach
</table>




@endsection