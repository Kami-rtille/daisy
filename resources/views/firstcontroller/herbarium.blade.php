
@extends("layouts.general")

@section("content")
    <h1>A propos</h1>
    <p>Le site au top</p>
    <a href='https://trefle.io/api/v1/plants?token=9kzxH4ZVjL9YAkBi8_ox02G5YlzfDJbTR91UZA9BJMk&filter[edible_part]=roots,stem,leaves,flowers,fruits,seeds' >CLick</a>
    @foreach($response['data'] as $ref)
    {{$ref['synonyms']}}

    
    @endforeach

    
@endsection

