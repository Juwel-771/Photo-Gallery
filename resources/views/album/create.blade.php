@extends('layout.app')

@section('content')
<h3>Create Album</h3>

<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <form action="store" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="name" class="form-label">Album Name: </label><br>
                <input type="text" name="name" class="form-control"><br>
                <label for="description" class="form-label">Description: </label><br>
                <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
                <label for="file" class="form-label">Upload Image: </label><br>
                <input type="file" name="cover_image" class="form-control"><br><br>

                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
