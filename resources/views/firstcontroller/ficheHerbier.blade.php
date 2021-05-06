@extends("layouts.general")

@section("content")
<<<<<<< HEAD
<a class="name" href="/herbarium">retour </a> <br/>
<h1>{{$plantae['name']}}</h1>
<h4>{{$plantae['subkingdom']}}</h4>
   
   
  
    <img src="{{$plantae['pictures']}}" alt="{{$plantae['name']}}"/><br/>
=======


<div class="photo-container">
<img src="{{$plantae['pictures']}}" alt="{{$plantae['name']}}"/>
</div>
    <h4>{{$plantae['subkingdom']}}</h4>


>>>>>>> 638dd683b29976dc59a6f8f12baa6ac3174229c7

    <span class="yellow" >{{$plantae['category']}}</span>
    <span class="lightgreen">{{$plantae['subkingdom']}}</span>
    <span class="green">{{$plantae['divisions']}}</span>
<<<<<<< HEAD
    <span class="green">{{$plantae['class']}}</span>


@endsection
=======
    <span class="green">{{$plantae['class']}}</span>
>>>>>>> 638dd683b29976dc59a6f8f12baa6ac3174229c7
