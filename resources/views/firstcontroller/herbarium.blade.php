
@extends("layouts.general")

@section("content")
    <h1>A propos</h1>
    <p>Le site au top</p>

<div class="sheets">

    @foreach($plant['data'] as $ref)  <!-- début de boucle -->
    <div class="sheet">
        <h3>{{$ref['common_name']}}</h3> <br/>          <!-- les nom sont recupérés grace au { } -->
        <h4>{{$ref['scientific_name']}}</h4>
        <p>Genus :{{$ref['genus']}}</p>
        <p>Family:{{$ref['family']}} | {{$ref['family_common_name']}}</p><br/>
        <img src="{{$ref['image_url']}}" alt="{{$ref['common_name']}}"/><br/>
    </div>
    @endforeach                      <!-- fin de boucle -->

</div>
    
@endsection

