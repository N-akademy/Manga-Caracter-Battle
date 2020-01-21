@extends('layouts.templates')

@section('content')




<h3>Combat XXX VS Ordinateur</h3>




@foreach ($gamer as $gamer)
    

<p> {{ $gamer->name }} attaque {{ $gamer->name }} avec {{ $gamer->attack}} et une force de {{ $gamer->power }}. Il reste {{ $gamer->lifePoint }} point de vie a {{ $gamer->name }} </p> 
<p> {{ $gamer->name }} attaque {{ $gamer->name }} avec {{ $gamer->attack}} et une force de {{ $gamer->power }}. Il reste {{ $gamer->lifePoint }} point de vie a {{ $gamer->name }} </p>

@endforeach


<p>{{ $gamer->name }} à gagner le combat. </p> 




@endsection



























@endsection