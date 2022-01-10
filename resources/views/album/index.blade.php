@extends('layout.app')

@section('content')

@if (session()->has('message'))
    <div class="alert alert-primary">
        {{session('message')}}
    </div>
@endif
    <h3>Album</h3>
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
      </div>
@endsection