@extends('layouts.app')

@section('title') Index
@endsection
@section('content')
<div>
<div class="text-center">
    <button type="button" class="btn btn-success">Create Post</button>
</div>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Posted By</th>
      <th scope="col">Create At</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
        <th scope="row">{{$post['id']}}</th>
        <td>{{$post['title']}}</td>
        <td>{{$post['posted_by']}}</td>
        <td>{{$post['created_at']}}</td>
        <td>   <a href="{{route('posts.show',$post['id'])}}"  class="btn btn-warning">View</a>
        <a type="button" href='/post/1' class="btn btn-primary">Edit</a>
        <a type="button" class="btn btn-danger">Delete</a>
        </td>
        </tr>
    @endforeach
   

  
 
   
  </tbody>
</table>
@endsection