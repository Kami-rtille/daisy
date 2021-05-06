@extends("layouts.general")

@section("content")

    @foreach($plantaes as $plant)
    <div class="herbier">
        <div class="list-herbier">
            <div class="titles">
            <h3>{{$plant['name']}}, <span>{{$plant['latinName']}}</span></h3> 
            <a class="name" href="herbarium/{{$plant->id}}"> Voir </a>
            </div>
            {{-- <h4>{{$plant['subkingdom']}}</h4>
            <img src="{{$plant['pictures']}}" alt="{{$plant['name']}}"/><br/> --}}

            {{-- <span class="yellow" >{{$plant->category}}</span>
            <span class="lightgreen">{{$plant->subkingdom}}</span>
            <span class="green">{{$plant->divisions}}</span>
            <span class="green">{{$plant->class}}</span> --}}
      
        
    </div>
@endforeach


</div>
@endsection

