@extends('layouts.app')

@section('title') Create @endsection

@section('content')
<div class="container mt-5">

   <form>
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" >
  </div>
  <div class="mb-3">
    <label for="Description" class="form-label">Description</label>
    <textarea class="form-control" aria-label="With textarea"></textarea>
  </div>
  <div class="mb-3">
      <label for="PostCreator" class="form-label">Post Creator</label>
      <select id="PostCreator" class="form-select">
        <option>Amal</option>
        <option>Ali</option>
      </select>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> 
</div>

@endsection