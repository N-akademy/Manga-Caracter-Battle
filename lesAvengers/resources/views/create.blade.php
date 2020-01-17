
@extends('layouts.templates')

@section('content')




<h1>Page de création de personnages</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form  action="/storeFighter" method="POST">
    @csrf
<div class="addSection"></div>
    <label for="name">Nom <span class="required">*</span></label>
    <input type="text"name="name" placeholder="Nom" />

    <select  name="attack_id"/>
        @foreach (attack as attack)
            <option value="{{attack->id}}">{{attack->name}}</option>
        @endforeach
    </select>

    <label for="power">Force<span class="required">*</span></label>
    <input type="number" name="power" placeholder="Force" />


    <label for="lifePoint">Point de vie<span class="required">*</span></label>
    <input type="number" name="lifePoint" placeholder="Point de vie"/>
    
    <br>


    <input type="submit" value="Ajouter" />


    </form>




@endsection