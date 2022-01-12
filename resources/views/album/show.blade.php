@extends('layout.app')

@section('content')
    {{$albums->name}}

    <br>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($albums as $item)
            <div class="col">
              <div class="card h-100">
                <img src="/storage/album_covers/{{$item->cover_image}}" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title"><a href="{{$item->id}}" class="nav-link text-dark">{{$item->name}}</a></h5>
                  <p class="card-text">{{$item->description}}</p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
    <a href="/album/index" class="btn btn-secondary">Go Back</a>
    <a href="/photos/create/{{$albums->id}}" class="btn btn-primary">Upload Photo</a>
@endsection