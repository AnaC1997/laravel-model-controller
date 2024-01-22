@extends('layouts.app')

@section('content')

   

<h1>Movies</h1>
   
<div class="d-flex">
    <div class="card" style="width: 18rem;">
        @foreach ($movies as $movie)
        <img src="{{ asset( $movie['imagine']) }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5>{{$movie->nome}}</h5>
          <p class="card-text">{{$movie->descrizione}}</p>
        </div>
        @endforeach
    </div>
</div>


     
@endsection