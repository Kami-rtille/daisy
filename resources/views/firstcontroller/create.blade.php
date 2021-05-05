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

    <h2>Partage les photos de tes plantes !</h2>
    <form action ="/photos/store" method="post" enctype="multipart/form-data">
    @csrf <br/>
    <input type="text" name="title" value="{{old('title')}}" placeholder="Nom de la plante" required/><br/>
    <input type="text" name="spec1" value="{{old('spec1')}}" placeholder="Famille de la plante" required/><br/>
    <input type="text" name="spec2" value="{{old('spec2')}}" placeholder="Sauve ou Domestique ?" required/><br/>
    <input type="file" name="image" placeholder="Upload de la photo" required/><br/>
    <input type="submit" /><br/>

    </form>
@endsection
