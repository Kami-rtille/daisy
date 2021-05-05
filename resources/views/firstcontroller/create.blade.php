@extends("layouts.general")

@section("content")

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="create">
    <h2>Partage les photos de tes plantes !</h2>
    <form action ="/photos/store" method="post" enctype="multipart/form-data">
    @csrf <br/>
    <div class="file-section">
    <label for="file" class="label-file">Choisir une photo... </label>
    <input type="file" id="file" class="file" name="image" placeholder="Upload de la photo" required/><br/>
    </div>
    <div class="create">
    <input class="yellow" type="text" name="title" value="{{old('title')}}" autocomplete="off" placeholder="Nom de la plante" required/><br/>
    <input class="green" type="text" name="spec1" value="{{old('spec1')}}" autocomplete="off" placeholder="Famille de la plante" required/><br/>
    <input  class="lightgreen" type="text" name="spec2" value="{{old('spec2')}}" autocomplete="off" placeholder="Sauvage ou Domestique ?" required/><br/>

    <input class="submit" type="submit" /><br/>
</div>
    </form>

</div>
@endsection
