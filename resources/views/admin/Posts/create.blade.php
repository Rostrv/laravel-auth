@extends('layouts.admin')

@section('content')

<h2>Create a new post</h2>
<form action="{{route('admin.posts.store')}}" method="post" >
    @csrf

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title" aria-describedby="TitleHelper" placeholder="php article" >
        <small id="TitleHelper" class="text-muted">type post title</small>
    </div>
    <div class="form-group">
        <label for="cover_image">Image</label>
        <input type="text" class="form-control" name="cover_image" id="cover_image" aria-describedby="cover_imageHelper" placeholder="insert image url">
        <small id="cove_imageHelper" class="text-muted">Insert image</small>
    </div>
    <div class="form-group">
        <label for="Content">content</label>
        <textarea class="form-control" name="" id="" rows="4"></textarea>
        <button type="submit" class="btn btn-primary">Add post</button>
    </div>
</form>
@endsection