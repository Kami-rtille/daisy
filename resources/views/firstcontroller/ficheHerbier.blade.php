@extends("layouts.general")

@section("content")
<a class="name" href="/herbarium">retour </a> <br/>
<h1>{{$plantae['name']}}</h1>
<h4>{{$plantae['subkingdom']}}</h4>
   
   
  
    <img src="{{$plantae['pictures']}}" alt="{{$plantae['name']}}"/><br/>

    <span class="yellow" >{{$plantae['category']}}</span>
    <span class="lightgreen">{{$plantae['subkingdom']}}</span>
    <span class="green">{{$plantae['divisions']}}</span>
    <span class="green">{{$plantae['class']}}</span>


@endsection
