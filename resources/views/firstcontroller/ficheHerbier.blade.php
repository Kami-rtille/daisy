@foreach($plantae as $u)
    <img src="{{$u['pictures']}}" alt="{{$u['name']}}"/><br/>
    <h4>{{$u['subkingdom']}}</h4>
    <img src="{{$u['pictures']}}" alt="{{$u['name']}}"/><br/>

    <span class="yellow" >{{$u->category}}</span>
    <span class="lightgreen">{{$u->subkingdom}}</span>
    <span class="green">{{$u->divisions}}</span>
    <span class="green">{{$u->class}}</span>
@endforeach 
