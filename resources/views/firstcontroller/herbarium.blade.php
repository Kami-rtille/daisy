@extends("layouts.general")

@section("content")
                      <!-- fin de boucle -->

    @foreach($plantaes as $plant)
    <div class="sheet">
        <div class="photo_container">
            <h3>{{$plant['name']}}</h3> <br/>
            <h4>{{$plant['subkingdom']}}</h4>
            <img src="{{$plant['pictures']}}" alt="{{$plant['name']}}"/><br/>
  
        
    </div>
@endforeach

@endsection
