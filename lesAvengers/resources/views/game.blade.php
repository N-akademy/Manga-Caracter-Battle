@extends('layouts.templates')

@section('content')



<h3>Combat</h3>



foreach

<p> {{ $gamer->name }} attaque {{ $gamer->name }} avec {{ $gamer->attack}} et une force de {{ $gamer->force }}. Il reste {{ $gamer->lifePoint }} point de vie a {{ $gamer->name }} </p> 
<p> {{ $gamer->name }} attaque {{ $gamer->name }} avec {{ $gamer->attack}} et une force de {{ $gamer->force }}. Il reste {{ $gamer->lifePoint }} point de vie a {{ $gamer->name }} </p>

endforeach


<p>{{ $gamer->name }} à gagner le combat. </p> 



























@endsection