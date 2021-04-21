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

    <form action ="/photos/store" method="post" enctype="multipart/form-data">
    @csrf <br/>
    <input type="text" name="title" value="{{old('title')}}" placeholder="Titre de la photo" required/><br/>
    <input type="file" name="image" placeholder="Upload de la photo" required/><br/>
    <input type="number" name="note" value="{{old('note')}}" placeholder="Note de la photo" required/><br/>
    <input type="submit" /><br/>

    </form>
@endsection
