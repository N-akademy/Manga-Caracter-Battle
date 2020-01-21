@extends('layouts.templates')
@section('content')
<form  action="{{route('updateGamer', $gamer->id)}}"method="POST">
    @csrf
<div class="addSection"></div>
    <label for="name">Nom <span class="required">*</span></label>
    <input type="text"name="name" placeholder="Nom" value="{{$gamer->name}}" />
    <br>
    <label for="attack">Attaque<span class="required">*</span></label>
    <input type="text"name="name" placeholder="Attaque" value="{{$gamer->attack}}" />
    <br>
    <label for="power">Force<span class="required">*</span></label>
    <input type="number" name="power" placeholder="Force" value="{{$gamer->power}}"/>
    <br>
    <label for="lifePoint">Point de vie<span class="required">*</span></label>
    <input type="number" name="lifePoint" placeholder="Point de vie" value="{{$gamer->lifePoint}}"/>
    
    <select name="team"  class="form-control">
    <option value=>{{$team->id}}</option>
        <option>Naruto</option>
        <option>One Piece</option>
        <option>Black Clover</option>
        <option></option>
        <option>Default select</option>
    </select>
    
    <input type="submit" value="Valider" />
    </form>


    @endsection