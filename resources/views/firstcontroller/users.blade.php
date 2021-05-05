
@extends("layouts.general")
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="./js/javascript.js"></script>
@section("content")
<div class="profil">
    <div class="profil-header">
    <h1>{{$user->name}}</h1>
    @auth
    @if (Auth::id() != $user->id)
    {{-- <h1>{{$user->name}}</h1> --}}
     @if(Auth::user()->IfollowThem->contains($user->id))
    <a class="btn-suivi" href="/changesuivi/{{$user->id}}">Se Désabonner</a>
    @else
    <a class="btn-stop" href="/changesuivi/{{$user->id}}">Suivre</a>
        @endif
        @endif
@endauth
</div>
    <div class="stats">
        <p class="follow"> {{$user->IfollowThem()->count()}} Abonnements </p>
        <p class="follow"> {{$user->TheyfollowMe()->count()}} Abonnés </p>
    </div>

@include("firstcontroller._photos", ["photos"=>$user->photos])

    {{-- <div id="panel">

        @foreach($user->IfollowThem as $u)
            <a href="/users/{{$u->id}}" class="users">{{$u->name}}</a>
        @endforeach 
    </div> --}}
</div>


@endsection


