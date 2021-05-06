@extends("layouts.general")

@section("content")


<div class="photo-container">
<img src="{{$plantae['pictures']}}" alt="{{$plantae['name']}}"/>
</div>
    <h4>{{$plantae['subkingdom']}}</h4>



    <span class="yellow" >{{$plantae['category']}}</span>
    <span class="lightgreen">{{$plantae['subkingdom']}}</span>
    <span class="green">{{$plantae['divisions']}}</span>
    <span class="green">{{$plantae['class']}}</span>