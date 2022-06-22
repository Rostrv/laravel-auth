@extends('layouts.admin')
Lato Admin
@section('content')
<div class="container">
    
    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
          <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>Slug</th>
            <th>Cover Image</th>
            <th>Actions</th>

          </tr>
        </thead>
        <tbody>
          @forelse ($posts as $post)
          <tr>
            <td scope="row">{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->slug}}</td>
            <td><img width ="150px"src="{{$post->cover_image}}" alt="Cover image {{$post->title}}"></td>
            <td>view-edit-delete</td>
          </tr>
          @empty
          <tr>
            <td scope="row">No Posts! Create your post. <a href="#">Create post</a></td>
            
          </tr>
          @endforelse
        </tbody>
      </table>


</div>
@endsection