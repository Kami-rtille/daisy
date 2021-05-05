
@extends("layouts.general")
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="./js/javascript.js"></script>
@section("content")
<div class="profil">
    <h1>{{$user->name}}</h1>
    <div class="follows">
       <div id="flip"><p class="follow">Follow {{$user->IfollowThem()->count()}}</p></div>
        <p class="follow">Followed by {{$user->TheyfollowMe()->count()}}</p>
    </div>
@auth
    @if (Auth::id() != $user->id)
        @if(Auth::user()->IfollowThem->contains($user->id))
            je le suis <a href="/changesuivi/{{$user->id}}">STOP</a>
            @else
                Je ne le suis pas encore <a href="/changesuivi/{{$user->id}}">SUIVRE</a>
        @endif
        @endif
@endauth

@include("firstcontroller._photos", ["photos"=>$user->photos])


    <div id="panel">
        @foreach($user->IfollowThem as $u)
            <a href="/users/{{$u->id}}" class="users">{{$u->name}}</a>
        @endforeach 
    </div>
</div>


@endsection


