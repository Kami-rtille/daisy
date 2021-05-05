
@extends("layouts.general")

    

@section("content")
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

@foreach($user->IfollowThem as $u)
    {{$u->name}}

@endforeach 

@endsection

