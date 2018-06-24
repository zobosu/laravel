@extends('layouts.master')
@section('content')

<div class="col-md-8 blog-main">
    <h1>Create posts.</h1>

<form method='post' action='/posts'>
    {{csrf_field()}}
  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" class="form-control" name="title" required>
  </div>
  <div class="form-group">
    <label for="content">contents:</label>
    <textarea type="text" class="form-control" name="content" required></textarea>
  </div>
  <button type="submit" class="btn btn-default">Publish</button>
  <div class='alert alert-danger'>

    <u>
        @foreach($errors->all() as $error)

  <li>$error</li>
        @endforeach

    </u>

  </div>
</form>
@endsection
