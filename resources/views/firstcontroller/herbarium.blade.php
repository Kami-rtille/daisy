@extends("layouts.general")

@section("content")
                      <!-- fin de boucle -->

    @foreach($plantaes as $plant)
    <div class="sheet">
        <div class="photo_container">
            <a class="name" href="herbarium/{{$plant->id}}"><h3>{{$plant['name']}}</h3> </a> <br/>
            <h4>{{$plant['subkingdom']}}</h4>
            <img src="{{$plant['pictures']}}" alt="{{$plant['name']}}"/><br/>

            <span class="yellow" >{{$plant->category}}</span>
            <span class="lightgreen">{{$plant->subkingdom}}</span>
            <span class="green">{{$plant->divisions}}</span>
            <span class="green">{{$plant->class}}</span>
      
        
    </div>
@endforeach



@endsection

