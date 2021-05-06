@extends("layouts.general")

@section("content")

<a class="back" href="/herbarium"> Retour </a>

<div class="photo-container">
<img src="{{$plantae['pictures']}}" alt="{{$plantae['name']}}"/>
</div>
<div class="herbier">
<h2>{{$plantae['name']}}</h2>
<h3 style="font-size:0.8rem">Nom Latin : {{$plantae['latinName']}}</h3>
    <h3 style="font-size:0.8rem">Famille : {{$plantae['class']}}</h3>

    <p class="separateur">Description</p>

    <p class="description">
        {{$plantae['description']}}
    </p>
    <p class="separateur">Tags</p>
    <div class="list">
    <span class="yellow">{{$plantae['category']}}</span>
    <span class="lightgreen">{{$plantae['subkingdom']}}</span>
    <span class="green">{{$plantae['divisions']}}</span>
    </div>
</div>

@endsection

