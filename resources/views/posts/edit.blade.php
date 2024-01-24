@extends('layouts.app')

@section('title') Edit @endsection

@section('content')
<div class="container mt-5">

   <form >
    
    @csrf 
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input name="title"type="text" class="form-control" id="title" >
  </div>
  <div class="mb-3">
    <label for="Description" class="form-label">Description</label>
    <textarea  name="description" class="form-control" aria-label="With textarea"></textarea>
  </div>
  <div class="mb-3">
      <label for="PostCreator" class="form-label">Post Creator</label>
      <select name="post_creator"  id="PostCreator" class="form-select">
        <option>Amal</option>
        <option>Ali</option>
      </select>
    </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form> 
</div>

@endsection