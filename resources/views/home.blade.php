@extends('layouts.app')

@section('content')

   

<h1 class="text-center">Movies</h1>
   
<div class="d-flex justify-content-between">
    @foreach ($movies as $movie)
    <div class="card m-4" style="width: 18rem;">
        <img src="{{ asset( $movie['imagine']) }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5>{{$movie->nome}}</h5>
          <p class="card-text">{{$movie->descrizione}}</p>
        </div>
       
    </div>
    @endforeach
</div>


     
@endsection